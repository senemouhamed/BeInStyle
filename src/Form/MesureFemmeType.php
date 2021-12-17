<?php

namespace App\Form;

use App\Entity\MesureFemme;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MesureFemmeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('epaule')
            ->add('mass_courte')
            ->add('mass_trois_quart')
            ->add('mass_longue')
            ->add('tour_de_masse')
            ->add('poitrine')
            ->add('taille')
            ->add('ceinture')
            ->add('anche')
            ->add('longueur_blouse')
            ->add('longueur_boubou')
            ->add('longueur_jupe')
            ->add('longueur_pagne')
            ->add('longueur_robr_trois_quart')
            ->add('longueur_robe_longue')
            ->add('jupe_courte')
            ->add('jupe_trois_quart')
            ->add('jupe_longue')
            ->add('client')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MesureFemme::class,
        ]);
    }
}
