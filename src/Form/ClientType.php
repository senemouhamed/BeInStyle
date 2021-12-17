<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class,[
                'attr'=>[
                    'placeholder'=>"votre nom"
                ]
            ])
            ->add('prenom',TextType::class,[
                'attr'=>[
                    'placeholder'=>"votre prenom"
                ]
            ])
            ->add('email', EmailType::class,[
                'attr'=>['placeholder'=>"votre email"]
            ])
            ->add('phone', IntegerType::class,[
                'attr'=>[
                    'placeholder'=>"votre numéro de téléphone"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
