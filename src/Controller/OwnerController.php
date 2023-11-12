<?php

namespace App\Controller;

use App\Entity\Bien;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OwnerController extends AbstractController
{
    #[Route('/owner', name: 'app_owner')]
    public function index(): Response
    {
        return $this->render('owner/index.html.twig', [
            'controller_name' => 'OwnerController',
        ]);
    }

    #[Route('/owner/reservations', name: 'owner_reservations')]
public function ownerReservations(EntityManagerInterface $em)
{
    $owner = $this->getUser(); // Récupère l'utilisateur connecté (propriétaire)

    // Récupérer tous les biens de ce propriétaire
    $biens = $em->getRepository(Bien::class)->findBy(['user' => $owner]);


    $reservations = [];
    foreach ($biens as $bien) {
        // Pour chaque bien, récupére ses réservations
        $reservationsForBien = $bien->getReservations();
        foreach ($reservationsForBien as $reservation) {
            $reservations[] = $reservation;
        }
    }

    return $this->render('owner/reservations.html.twig', [
        'reservations' => $reservations,
        'biens' => $biens
    ]);
}

}
