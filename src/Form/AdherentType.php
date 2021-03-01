<?php

namespace App\Form;

use App\Entity\Adherents;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdherentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom')
            ->add('Prenom')
            ->add('dossier')
            ->add('FreqenceMensuelle')
            ->add('NbPassage')
            ->add('Date')
            ->add('Adulte')
            ->add('Enfant')
            ->add('Colis')
            ->add('Telephone')
            ->add('Paye')
            ->add('hygiene')
            ->add('Lessive')
            ->add('Couches')
            ->add('Annee')
            ->add('Observation')
            ->add('status')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adherents::class,
        ]);
    }
}
