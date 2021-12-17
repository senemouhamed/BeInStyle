<?php

namespace App\Form;

use App\Entity\MesureHomme1;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MesureHomme1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('E')
            ->add('MC')
            ->add('ML')
            ->add('MTQ')
            ->add('TM')
            ->add('PG')
            ->add('Cou')
            ->add('P')
            ->add('LB')
            ->add('DS')
            ->add('TQ')
            ->add('C')
            ->add('LP')
            ->add('Cu')
            ->add('THA')
            ->add('client')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MesureHomme1::class,
        ]);
    }
}
