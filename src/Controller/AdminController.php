<?php

namespace App\Controller;

use App\Entity\Bien;
use App\Entity\Reservation;
use App\Entity\Facturation;
use App\Form\BienType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/reservations', name: 'admin_reservations')]
    public function reservations(EntityManagerInterface $em)
    {
        $reservations = $em->getRepository(Reservation::class)->findAll();
        return $this->render('admin/reservations.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[Route('/admin/biens', name: 'admin_biens')]
    public function biens(EntityManagerInterface $em)
    {
        $biens = $em->getRepository(Bien::class)->findAll();
        return $this->render('admin/biens.html.twig', [
            'biens' => $biens,
        ]);
    }

    #[Route('/admin/bien/add', name: 'admin_bien_add')]
    public function addBien(Request $request, EntityManagerInterface $em): Response
    {
        $bien = new Bien();
        $form = $this->createForm(BienType::class, $bien);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
              // Gérer l'upload d'image
        $imageFile = $form->get('image_path')->getData();
        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = $originalFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                
            }

            $bien->setImagePath($newFilename);
        }
            $em->persist($bien);
            $em->flush();
            $this->addFlash('success', 'Bien ajouté avec succès!');
            return $this->redirectToRoute('admin_biens');
        }
        return $this->render('admin/bien_add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/bien/edit/{id}', name: 'admin_bien_edit')]
    public function editBien(Request $request, Bien $bien, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(BienType::class, $bien);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
              // Gérer l'upload d'image
        $imageFile = $form->get('image_path')->getData();
        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = $originalFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                
            }

            $bien->setImagePath($newFilename);
        }

            $em->flush();
            $this->addFlash('success', 'Bien modifié avec succès!');
            return $this->redirectToRoute('admin_biens');
        }
        return $this->render('admin/bien_edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/admin/facturations', name: 'admin_facturations')]
    public function facturations(EntityManagerInterface $em)
    {
        $facturations = $em->getRepository(Facturation::class)->findAll();
        return $this->render('admin/facturations.html.twig', [
            'facturations' => $facturations,
        ]);
    }

#[Route('/admin/facturation/annuler/{id}', name: 'app_annuler_facturation')]
public function annulerFacturation(int $id, EntityManagerInterface $em): Response
{
    $facturation = $em->getRepository(Facturation::class)->find($id);
    
    if (!$facturation) {
        $this->addFlash('error', 'Facturation non trouvée.');
        return $this->redirectToRoute('admin_facturations');
    }

    // Ici, vous pouvez effectuer des opérations supplémentaires si nécessaire
    // par exemple, marquer la facturation comme annulée plutôt que de la supprimer.
    $em->remove($facturation);
    $em->flush();

    $this->addFlash('success', 'Facturation annulée avec succès.');
    return $this->redirectToRoute('admin_facturations');
}
}
