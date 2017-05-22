<?php

namespace MBLBundle\Form;

use MBLBundle\Entity\ETQ;
use MBLBundle\Entity\Matching;
use MBLBundle\Entity\Metier;
use MBLBundle\Entity\ProfilRecherche;
use MBLBundle\Entity\Projet;
use MBLBundle\Entity\Secteur;
use MBLBundle\Entity\TypeDeProjet;
use MBLBundle\MBLBundle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre', TextType::class)
            ->add('description')
            ->add('siteInternet')
            ->add('ebustaUrl')
            ->add('localisation')
            ->add('secteur', EntityType::class,
                array(
                    'class' => Secteur::class,
                    'choice_label' =>function ($secteur) {
                        return $secteur->getSecteurActivite();
                    },
                    'expanded'=> true,
                    'multiple'=> false


                ))
            ->add('typeDeProjet', EntityType::class,
                array(
                    'class' => TypeDeProjet::class,
                    'choice_label' =>'typeDeProjet',
                    'multiple'=> false,
                    'expanded'=> true

                ))

            ->add('submit', SubmitType::class);
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
