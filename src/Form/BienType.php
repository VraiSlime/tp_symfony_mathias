<?php

namespace App\Form;

use App\Entity\Bien;
use App\Entity\TypeBien;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BienType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['rows' => 5]
            ])
            ->add('image_path', FileType::class, [
                'label' => 'Image',
                'mapped' => false, 
                'required' => false,
                'help' => 'Laissez vide si vous ne voulez pas changer l\'image'
            ])
            ->add('nbr_traveller', IntegerType::class, [
                'label' => 'Nombre de voyageurs'
            ])
            ->add('type_bien', EntityType::class, [
                'class' => TypeBien::class,
                'choice_label' => 'label',
                'label' => 'Type de bien'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Bien::class,
        ]);
    }
}
