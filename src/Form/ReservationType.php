<?php

namespace App\Form;

use App\Entity\Bien;
use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDebut', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de début'
            ])
            ->add('dateFin', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de fin'
            ])
            ->add('nbrAdult', NumberType::class, [
                'label' => 'Nombre d\'adultes'
            ])
            ->add('nbrEnfant', NumberType::class, [
                'label' => 'Nombre d\'enfants'
            ])
            ->add('nbrBaby', NumberType::class, [
                'label' => 'Nombre de bébés'
            ])
            ->add('accesPiscine', CheckboxType::class, [
                'label' => 'Souhaitez-vous un accès à la piscine?',
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
