<?php

namespace App\Form;

use App\Entity\Logboek;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LogboekType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Brief_nr')
            ->add('Datum')
            ->add('Lading')
            ->add('Laadplaats')
            ->add('Vertrektijd')
            ->add('Bestemming')
            ->add('Evenement')
            ->add('ChaffeurId')
            ->add('UserId')
            ->add('TruckId')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Logboek::class,
        ]);
    }
}
