<?php

namespace App\Controller;

use App\Entity\Bien;
use App\Entity\Taxe;
use App\Entity\Facturation;
use App\Entity\Reservation;
use App\Form\ReservationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReservationController extends AbstractController
{
    #[Route('/reservation/{bien_id}', name: 'app_reservation')]
    public function index(int $bien_id, Request $request, EntityManagerInterface $em): Response
    {
        $bien = $em->getRepository(Bien::class)->find($bien_id);
        $errorMessage = null;
        $typeBien = $bien->getTypeBien()->getLabel();

        if (!$bien) {
            throw $this->createNotFoundException('Le bien demandé n\'existe pas');
        }

        $capacity = $bien->getNbrTraveller();

        $typeLabel = $bien->getTypeBien()->getLabel(); 

        // 1. Formatage correct du type de bien
        $typeLabel = str_replace('mobile-home', 'Mobile home', $typeLabel);
        $typeLabel = str_replace('caravane', 'Caravane', $typeLabel);

        list($type, $capacity) = explode('-', $typeLabel);
        $type = str_replace('Mobile home', 'Mobile-home', $type);

        // 2. Utiliser "pers.", "places", ou "m²" en fonction du type de bien
        if ($type === 'Mobile-home') {
            if ($capacity == 6) {
                $labelForTaxe = "$type 6-8 pers.";
            } else {
                $labelForTaxe = "$type $capacity pers.";
            }
        } elseif ($type === 'Caravane') {
            $labelForTaxe = "$type $capacity places";
        } else { // Pour Emplacement tente
            $labelForTaxe =  "Emplacement tente " . ($capacity == 1 ? "8 m²" : "12m²");
        }

        $taxe = $em->getRepository(Taxe::class)->findOneBy(['label' => $labelForTaxe]);
        
        if (!$taxe) {
            throw $this->createNotFoundException('Le tarif pour ce type de bien n\'existe pas');
        }

        $reservation = new Reservation();
        $reservation->setBien($bien);
        $user = $this->getUser();

        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour effectuer une réservation.');
            return $this->redirectToRoute('app_login'); 
        }
        $reservation->setUser($user);
        $bienPrice = $taxe->getPrice();
        
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $adultes = $form->get('nbrAdult')->getData();
            $enfants = $form->get('nbrEnfant')->getData();
            $dateDebut = $form->get('dateDebut')->getData();
            $dateFin = $form->get('dateFin')->getData();
            $accesPiscine = $form->get('accesPiscine')->getData();
            
            // 1. Obtiens le nombre total de biens de ce type
            $totalBiensOfType = $em->getRepository(Bien::class)->countByType($bien->getTypeBien());
        
            // 2. Obtens le nombre de réservations pour ce type de bien pendant la période demandée
            $reservedBiensOfType = $em->getRepository(Reservation::class)->countReservedByTypeAndPeriod($bien->getTypeBien(), $dateDebut, $dateFin);
        
            // 3. Vérifiez si un bien est disponible
            if ($reservedBiensOfType >= $totalBiensOfType) {
                $this->addFlash('error', 'Désolé, tous les biens de ce type sont déjà réservés pour la période demandée.');
                return $this->render('reservation/index.html.twig', [
                    'reservationForm' => $form->createView(),
                    'bienPrice' => $taxe->getPrice() / 100,
                    'errorMessage' => 'Tous les biens de ce type sont déjà réservés pour la période demandée.',
                ]);
            }
            //Vérifie la date d'ouverture du camping en comparant avec la date de séjour demandé par le client
            $currentYear = $dateDebut->format('Y');
            $ouvertureDebut = new \DateTime("$currentYear-05-05");
            $ouvertureFin = new \DateTime("$currentYear-10-10");
            if ($dateDebut < $ouvertureDebut || $dateFin > $ouvertureFin) {
                $this->addFlash('error', 'Vous ne pouvez pas réserver en dehors de la période d\'ouverture du camping (du 05 mai au 10 octobre).');
                return $this->render('reservation/index.html.twig', [
                    'reservationForm' => $form->createView(),
                    'bienPrice' => $taxe->getPrice() / 100,
                    'errorMessage' => 'Vous ne pouvez pas réserver en dehors de la période d\'ouverture du camping.',
                ]);
            }

            $totalOccupants = $adultes + $enfants;
            
            $existingReservation = $em->getRepository(Reservation::class)->findOneBy([
                'bien' => $bien,
                'dateDebut' => $dateDebut,
                'dateFin' => $dateFin
            ]);

            //Vérife par rapport a si le bien à déjà réservé par la date demandé par le client
            if ($existingReservation) {
                $this->addFlash('error', 'Une réservation pour ces dates existe déjà pour ce bien.');
                return $this->render('reservation/index.html.twig', [
                    'reservationForm' => $form->createView(),
                    'bienPrice' => $taxe->getPrice() / 100,
                    'errorMessage' => 'Une réservation pour ces dates existe déjà pour ce bien.',
                ]);
            }
            //Vérife pour voir si le nombre de personne correspond avec la capacité du bien
            if ($totalOccupants > $bien->getNbrTraveller()) {
                $errorMessage = 'Le nombre total d\'occupants dépasse la capacité du bien.';
                $this->addFlash('error', $errorMessage);
                return $this->render('reservation/index.html.twig', [
                    'reservationForm' => $form->createView(),
                    'bienPrice' => $taxe->getPrice() / 100,
                    'errorMessage' => $errorMessage,
                ]);
            }
        
            // Initialiser le prix total
            $prixTotal = 0;
        
            // Calcul du nombre total de jours entre les dates
            $jours = $dateDebut->diff($dateFin)->days;
            dump($jours);
        
            // Calcul pour la haute saison
            $currentYear = $dateDebut->format('Y');
            //j'initialise des objets datetime pour définir les dates d'ouverture et de fermeture du camping
            $ouvertureDebut = (new \DateTime())->setDate($currentYear, 5, 5);
            $ouvertureFin = (new \DateTime())->setDate($currentYear, 10, 10);   
            //de même pour dates de la haute saison
            $hauteSaisonDebut = (new \DateTime())->setDate($currentYear, 6, 21);
            $hauteSaisonFin = (new \DateTime())->setDate($currentYear, 8, 31);
            dump($hauteSaisonDebut, $hauteSaisonFin);

            //calcul du nombre de jours de la haute saison de la réservation
            if ($dateDebut > $hauteSaisonFin) {
                $joursHauteSaison = 0;
            } else {
                $joursHauteSaison = min($dateFin, $hauteSaisonFin)->diff(max($dateDebut, $hauteSaisonDebut))->days;
            }
            //calcul du nombre de jours de la basse saison
            $joursBasseSaison = $jours - $joursHauteSaison;
            dump($joursHauteSaison, $joursBasseSaison);
            $prixBase = $taxe->getPrice();
            dump($prixBase);
        
            //augmentation de 15% pendant la haute saison
            $prixTotal += ($prixBase + $prixBase * 0.15) * $joursHauteSaison;
            //calcul pour la basse saison
            $prixTotal += $prixBase * $joursBasseSaison;
        
            // Réduction
            $prixTotal -= floor($jours / 7) * ($prixBase * 0.05);
        
            // Taxes
            $prixTotal += (0.60 * $adultes + 0.35 * $enfants) * $jours * 100; // Converti en centimes
        
            // Accès piscine
            if ($accesPiscine) {
                $prixTotal += (1.5 * $adultes + 1 * $enfants) * $jours * 100; // Converti en centimes
            }
        
            // Création de la facturation et sauvegarde en BDD
            $facturation = new Facturation();
            $facturation->setFisrtname($user->getFirstname());
            $facturation->setLastname($user->getLastname());
            $facturation->setEmail($user->getEmail());
            $facturation->setTelephone($user->getTelephone()); 
            $facturation->setDateDebut($dateDebut);
            $facturation->setDateFin($dateFin);
            $facturation->setPrixTotal($prixTotal);
        
            $em->persist($facturation);
        
            // Enregistrement de la réservation
            $reservation->setPrixTotal($prixTotal);
            $reservation->setAccesPiscine($accesPiscine);
        
            $em->persist($reservation);
            $em->flush();
        
            $this->addFlash('success', 'Votre réservation a été effectuée avec succès.');
            return $this->redirectToRoute('app_home');
        }
            
    return $this->render('reservation/index.html.twig', [
        'reservationForm' => $form->createView(),
        'bienPrice' => $taxe->getPrice() / 100, // Convertir en euros pour l'affichage
        'errorMessage' => $errorMessage,
    ]);
    }

    
}
