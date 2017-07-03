<?php

namespace MBLBundle\Form;

use MBLBundle\Entity\Projet;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
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
        $builder->add('titre'.$options["locale"], TextType::class, array(
                'required' => true
            ))
            ->add('description'.$options["locale"], TextareaType::class, array(
                'required' => true,
                'attr' => array('rows' => '1000','cols' => '1000')
            ))
            ->add('siteInternet'.$options["locale"], UrlType::class, array(
                'required' => false
            ))
            ->add('ebustaUrl'.$options["locale"], UrlType::class, array(
                'required' => false
            ))
            ->add('typeDeProjet', EntityType::class, array(
                'class'         => 'MBLBundle\Entity\TypeDeProjet',
                'choice_label'  => 'typeDeProjet'.$options["locale"],
                'multiple'      => false,
                'expanded'      => false,
                'required'      => true,
                'placeholder'   => '  Choisissez',
                'choice_translation_domain' => true
            ))
            ->add('secteur', EntityType::class, array(
                'class'         => 'MBLBundle\Entity\Secteur',
                'choice_label' => 'secteurActivite'. $options["locale"],
                'multiple'      => false,
                'expanded'      => false,
                'required'      => true,
                'placeholder'   => '  Choisissez'
            ))
            ->add('localisation'.$options["locale"], CountryType::class, array(
                'required' => true
            ))
            ->add('fichier', FichierType::class
            )

        ;
    }


    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Projet::class,
            'locale' => null

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
