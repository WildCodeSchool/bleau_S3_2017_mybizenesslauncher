<?php

namespace MBLBundle\Form;

use MBLBundle\Entity\Competences;
use MBLBundle\Entity\Dispo;
use MBLBundle\Entity\ETQ;
use MBLBundle\Entity\Invest;
use MBLBundle\Entity\Metier;
use MBLBundle\Entity\Ou;
use MBLBundle\Entity\Projet;
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
        $builder

            ->add('typeDeProjet', EntityType::class, array(
                'class'         => 'MBLBundle\Entity\TypeDeProjet',
                'choice_label'  => 'typeDeProjet'. $options["locale"],
                'multiple'      => false,
                'expanded'      => false,
                'required'      => false,
                'placeholder'   => 'Choisissez',

            ))
            ->add('secteur', EntityType::class, array(
                'class'         => 'MBLBundle\Entity\Secteur',
                'choice_label' => 'secteurActivite'. $options["locale"],
                'multiple'      => false,
                'expanded'      => false,
                'required'      => false,
                'placeholder'   => 'Choisissez'
            ))
            ->add('localisation', LocalisationProjetType::class, array(
                'label' => false
            ))
     ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null,
            'locale'=> null
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
