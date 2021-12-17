<?php

namespace App\Form;

use App\Entity\MesureHomme;
use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MesureHommeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('epaul')
            ->add('mass_courte')
            ->add('mass_long')
            ->add('mass_trois_quart')
            ->add('tourde_mass')
            ->add('poigner')
            ->add('coup')
            ->add('poitrine')
            ->add('longueur_boub')
            ->add('demi_saison')
            ->add('trois_quart')
            ->add('ceinture')
            ->add('longueur_pantalon')
            ->add('cuisse')
            ->add('anche')
            ->add('client')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MesureHomme::class,
        ]);
    }
}
