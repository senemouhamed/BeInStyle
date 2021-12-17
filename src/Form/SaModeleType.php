<?php

namespace App\Form;

use App\Entity\SaModele;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
class SaModeleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class,[
                'attr'=>[
                    'placeholder'=>" nom du modéle"
                ]
            ])
            ->add('descriptionmodele', TextType::class,[
                'attr'=>[
                    'placeholder'=>"Description du modéle"
                ]
            ])
            ->add('imagaemodele', FileType::class, ['required' => false, 'data_class'=>null],[
                'attr'=>[
                    'placeholder'=>"photo du modéle"
                ]
             ] )
             ->add('prix', IntegerType::class,[
                'attr'=>[
                    'placeholder'=>"prix"
                ]
            ])
            ->add('quantity', IntegerType::class,[
                'attr'=>[
                    'placeholder'=>"la quanité"
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SaModele::class,
        ]);
    }
}
