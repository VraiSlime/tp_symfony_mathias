<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Bien;
use App\Entity\Taxe;
use App\Entity\User;
use Faker\Generator;
use App\Entity\TypeBien;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    //propriété pour encoder le mot de passe
    private $encoder;
    //propriété pour le faker
    private Generator $faker;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
        $this->faker = Factory::create('fr_FR');
    }


    public function load(ObjectManager $manager): void
    {
        $this->loadAdminUser($manager);
        $this->loadBiens($manager); 
        $this->loadTaxes($manager); 
        $manager->flush();
    }
    
    private function loadAdminUser(ObjectManager $manager)
    {
        // Créer un admin
        $user = new User();
        $user->setEmail('admin@admin.com')
            ->setPassword($this->encoder->hashPassword($user, 'admin'))
            ->setFirstname($this->faker->firstName)
            ->setLastname($this->faker->lastName)
            ->setTelephone($this->faker->phoneNumber)
            ->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);
        $this->addReference('admin_1', $user);
        
        // Créer 60 utilisateurs (reference de 2 à 61)
        for($i=2; $i<=61; $i++){
            $user = new User();
            $user->setEmail($this->faker->email)
                ->setPassword($this->encoder->hashPassword($user, 'lambda'))
                ->setFirstname($this->faker->firstName)
                ->setLastname($this->faker->lastName)
                ->setTelephone($this->faker->phoneNumber)
                ->setRoles(['ROLE_USER']);
            $manager->persist($user);
            $this->addReference('user_' . $i, $user);
        }
        
        // Créer 30 owners (reference de 62 à 91)
        for($i=62; $i<=91; $i++){
            $user = new User();
            $user->setEmail($this->faker->email)
                ->setPassword($this->encoder->hashPassword($user, 'owner'))
                ->setFirstname($this->faker->firstName)
                ->setLastname($this->faker->lastName)
                ->setTelephone($this->faker->phoneNumber)
                ->setRoles(['ROLE_OWNER']);
            $manager->persist($user);
            $this->addReference('owner_' . ($i-61), $user); 
        }
    }

    private function loadBiens(ObjectManager $manager)
    {
        $imageDir = __DIR__ . '/../../public/images/';
        if (!is_dir($imageDir)) {
            mkdir($imageDir, 0755, true);
        }
        
        $mobileHomesData = [
            [3, 50, 10],
            [4, 54, 10],
            [5, 57, 10],
            [8, 64, 20],
        ];
        
        $caravanesData = [
            [2, 45, 3],
            [4, 48, 4],
            [6, 54, 3],
        ];
        
        $emplacementsData = [
            [1, 12, 15],
            [2, 14, 15],
        ];
        
        $typesData = [
            'mobile-home' => ['data' => $mobileHomesData, 'image_pattern' => 'mobile-home-%d.jpg'],
            'caravane' => ['data' => $caravanesData, 'image_pattern' => 'caravane-%d.jpg'],
            'emplacement' => ['data' => $emplacementsData, 'image_pattern' => 'emplacement-%d.jpg'],
        ];
        
        foreach ($typesData as $typeLabel => $typeInfo) {
            foreach ($typeInfo['data'] as $config) {
                $capacity = $config[0];
                $price = $config[1];
                $quantity = $config[2];
        
                $typeBien = new TypeBien();
                $typeBien->setLabel("$typeLabel-$capacity");
                $typeBien->setPrice($price);
                $manager->persist($typeBien);
        
                for ($i = 1; $i <= $quantity; $i++) {
                    $bien = new Bien();
                    $bien->setDescription("$typeLabel pour $capacity personnes");
    
                    // Utilisez l'image basée sur le type et la capacité
                    $imageName = sprintf($typeInfo['image_pattern'], $capacity);
                    $bien->setImagePath('/images/' . $imageName);
        
                    $bien->setNbrTraveller($capacity);
                    $bien->setTypeBien($typeBien);
        
                    if ($typeLabel == 'mobile-home' && $i <= 30) {
                        $bien->setUser($this->getReference('owner_' . rand(1, 30)));
                    }
        
                    $manager->persist($bien);
                }
            }
        }
    }

    private function loadTaxes(ObjectManager $manager)
{
    $taxes = [
        ['label' => 'Taxe de séjour - Enfant', 'price' => 35],
        ['label' => 'Taxe de séjour - Adulte', 'price' => 60],
        ['label' => 'Accès piscine - Enfant', 'price' => 100],
        ['label' => 'Accès piscine - Adulte', 'price' => 150],
        ['label' => 'Mobile-home 3 pers.', 'price' => 5000],
        ['label' => 'Mobile-home 4 pers.', 'price' => 5400],
        ['label' => 'Mobile-home 5 pers.', 'price' => 5700],
        ['label' => 'Mobile-home 6-8 pers.', 'price' => 6400],
        ['label' => 'Caravane 2 places', 'price' => 4500],
        ['label' => 'Caravane 4 places', 'price' => 4800],
        ['label' => 'Caravane 6 places', 'price' => 5400],
        ['label' => 'Emplacement tente 8 m²', 'price' => 1200],
        ['label' => 'Emplacement tente 12m²', 'price' => 1400],
    ];

    foreach ($taxes as $data) {
        $taxe = new Taxe();
        $taxe->setLabel($data['label']);
        $taxe->setPrice($data['price']);
        $manager->persist($taxe);
    }
}

    

}
