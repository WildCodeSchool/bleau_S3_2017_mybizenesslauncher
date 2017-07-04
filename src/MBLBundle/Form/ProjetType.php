<?php

namespace MBLBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre', TextType::class, array(
                'required' => true
            ))
            ->add('description', TextareaType::class, array(
                'required' => true
            ))
            ->add('siteInternet', UrlType::class, array(
                'required' => false,
            ))
            ->add('ebustaUrl', UrlType::class, array(
                'required' => false,
            ))
            ->add('typeDeProjet', EntityType::class, array(
                'class'         => 'MBLBundle\Entity\TypeDeProjet',
                'choice_label'  => 'typeDeProjet',
                'multiple'      => false,
                'expanded'      => false,
                'required'      => true,
                'placeholder'   => '  Choisissez'
            ))
            ->add('secteur', EntityType::class, array(
                'class'         => 'MBLBundle\Entity\Secteur',
                'choice_label'  => 'secteurActivite',
                'multiple'      => false,
                'expanded'      => false,
                'required'      => true,
                'placeholder'   => '  Choisissez'
            ))
            ->add('localisation', LocalisationProjetType::class)
            ->add('ville')
            ->add('fichier', FichierType::class)
        ;
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
