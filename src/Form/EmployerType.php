<?php

namespace App\Form;

use App\Entity\Employer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class EmployerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom', TextType::class,[
                'attr'=>[
                    'placeholder'=>"votre nom"
                ]
            ])
            ->add('Telephone', IntegerType::class,[
                'attr'=>[
                    'placeholder'=>"votre numéro de téléphone"
                ]
            ])
            ->add('adresse', TextType::class,[
                'attr'=>[
                    'placeholder'=>"votre adresse"
                ]
            ])
            ->add('salaire', IntegerType::class,[
                'attr'=>[
                    'placeholder'=>"montant salaire"
                ]
            ])
            ->add('avance', IntegerType::class,[
                'attr'=>[
                    'placeholder'=>"avance salaire"
                ]
            ])
            ->add('reste', IntegerType::class,[
                'attr'=>[
                    'placeholder'=>"somme restant"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Employer::class,
        ]);
    }
}
