<?php

namespace App\Controller;

use App\Entity\TypeBien;
use App\Repository\BienRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BienController extends AbstractController
{
#[Route('/biens', name: 'biens_list')]
public function list(BienRepository $bienRepository, EntityManagerInterface $em, Security $security): Response
{
    $user = $security->getUser();
    
    if (null === $user || !$security->isGranted('ROLE_USER') && !$security->isGranted('ROLE_OWNER')) {
        // Redirection vers la page de connexion
        return $this->redirectToRoute('app_login');
     
    }

    $biens = $bienRepository->findAll();
    $typesBiens = $em->getRepository(TypeBien::class)->findAll();
    return $this->render('biens/list.html.twig', [
        'biens' => $biens,
        'typesBiens' => $typesBiens,
    ]);
}

}
