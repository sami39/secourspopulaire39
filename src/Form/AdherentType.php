<?php

namespace App\Form;

use App\Entity\Adherents;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
            ->add('FreqenceMensuelle', ChoiceType::class, [
                'choices' => [
                    '1' => '1',
                    '2' => '2',
                    'exceptionnel' => 'exceptionnel',
                    
                    
                     
                ],
             
            ])
            ->add('NbPassage')
            ->add('Date')
            ->add('Adulte')
            ->add('Enfant')
            ->add('Colis', ChoiceType::class, [
                'choices' => [
                    'colis 1' => '1',
                    'colis 2' => '2',
                    'colis 3' => '3',
                    'colis 4' =>  '4',
                    
                     
                ],
             
            ])
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
