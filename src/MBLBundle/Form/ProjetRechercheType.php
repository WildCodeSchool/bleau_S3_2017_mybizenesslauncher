<?php

namespace MBLBundle\Form;

use MBLBundle\Entity\Competences;
use MBLBundle\Entity\Dispo;
use MBLBundle\Entity\ETQ;
use MBLBundle\Entity\Invest;
use MBLBundle\Entity\Metier;
use MBLBundle\Entity\Ou;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjetRechercheType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('secteur', EntityType::class, array(
                'class'         => 'MBLBundle\Entity\Secteur',
                'choice_label'  => 'secteurActivite',
                'multiple'      => false,
                'expanded'      => false,
                'required'       => false,
                'placeholder'   => '  Choisissez'))

            ->add('typeDeProjet', EntityType::class, array(
                'class'         => 'MBLBundle\Entity\TypeDeProjet',
                'choice_label'  => 'typeDeProjet',
                'multiple'      => false,
                'expanded'      => false,
                'required'       => false,
                'placeholder'   => '  Choisissez'   ))
            ->add('localisation', LocalisationProjetType::class, array(
                'label' => false
            ))
        ;

//            ))
//            ->add('etq', EntityType::class,
//                array(
//                    'class' => ETQ::class,
//                    'choice_label' =>'etq',
//                    'multiple'=> false,
//                    'expanded'=> false
//
//                ))
//            ->add('ou', EntityType::class,
//                array(
//                    'class' => Ou::class,
//                    'choice_label' =>'ou',
//                    'multiple'=> false,
//                    'expanded'=> false
//
//                ))
//            ->add('invest', EntityType::class,
//                array(
//                    'class' => Invest::class,
//                    'choice_label' =>'invest',
//                    'multiple'=> false,
//                    'expanded'=> false
//
//                ))
//
//            ->add('dispo', EntityType::class,
//                array(
//                    'class' => Dispo::class,
//                    'choice_label' =>'dispo',
//                    'multiple'=> false,
//                    'expanded'=> false
//
//                ))
//            ->add('competences', EntityType::class,
//                array(
//                    'class' => Competences::class,
//                    'choice_label' =>'competences',
//                    'multiple'=> true,
//                    'expanded'=> false
//

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MBLBundle\Entity\Projet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mblbundle_projet';
    }


}
