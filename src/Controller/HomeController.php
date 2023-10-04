<?php

namespace App\Controller;

use App\Entity\Bien;
use App\Form\BienType;
use App\Entity\TypeBien;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EntityManagerInterface $em): Response
    {
        $typeBiensRepository = $em->getRepository(TypeBien::class);
        $typesBiens = $typeBiensRepository->findAll();
    
        $images = [];
        foreach ($typesBiens as $typeBien) {
            //pour obtenir le premier Bien de ce type
            $bien = $em->getRepository(Bien::class)->findOneBy(['type_bien' => $typeBien]);
            if ($bien) {
                $images[$typeBien->getId()] = $bien->getImagePath();
            }
        }
    
        return $this->render('home/index.html.twig', [
            'typesBiens' => $typesBiens,
            'images' => $images
        ]);
    }
    
}
