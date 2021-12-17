<?php

namespace App\Form;

use App\Entity\Catalogue;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class FormCatalogueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('modele', FileType::class, ['required' => false, 'data_class'=>null])
            ->add('quantity')
            ->add('prix')
            ->add('description')
            ->add('Lastdate', DateTimeType::class, [
                'date_label' => 'Starts On',
            ]);
           // ->add('client')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Catalogue::class,
        ]);
    }
}
