<?php

namespace MBLBundle\Form;

use MBLBundle\Entity\Projet;
use MBLBundle\Form\CustomType\LocalisationFrType;
use MBLBundle\Form\CustomType\LocalisationItType;
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

        $builder
	        ->add('titre'.$options["locale"], TextType::class, array(
                'required' => true
	        ))
            ->add('description'.$options["locale"], TextareaType::class, array(
                'required' => true
            ))

            ->add('description'.$options["locale"], TextareaType::class, array(
                'required' => true
            ))
            ->add('siteInternet'.$options["locale"], UrlType::class, array(
                'required' => false,

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
                'placeholder'   => 'Choisissez',
                'choice_translation_domain' => true
            ))
            ->add('secteur', EntityType::class, array(
                'class'         => 'MBLBundle\Entity\Secteur',
                'choice_label' => 'secteurActivite'.$options["locale"],
                'multiple'      => false,
                'expanded'      => false,
                'required'      => true,
                'placeholder'   => 'Choisissez'
            ))
	        ->add('ville', TextType::class, array(
		        'required' => false
	        ))
	        ->add('fichier', FichierType::class, array(
		        'required' => false
	        ));

        if ($options["locale"] == "fr")
        {
            $builder->add('localisation', LocalisationFrType::class, array(
	            'required'      => true,
                'placeholder'   => 'Choisissez'
            ));
        }
        else
        {
            $builder->add('localisation', LocalisationItType::class, array(
	            'required'      => true,
                'placeholder'   => 'Choisissez'
            ));
        }
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
