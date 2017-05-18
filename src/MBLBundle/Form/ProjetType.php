<?php

namespace MBLBundle\Form;

use MBLBundle\Entity\ETQ;
use MBLBundle\Entity\Matching;
use MBLBundle\Entity\ProfilRecherche;
use MBLBundle\Entity\Secteur;
use MBLBundle\Entity\TypeDeProjet;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre')
            ->add('description')
            ->add('siteInternet')
            ->add('ebustaUrl')
            ->add('localisation')



//            ->add('typeDeProjet', EntityType::class, array(
//                'class' => TypeDeProjet::class, 'choice_label' => 'typeDeProjet',
//            ))
//            ->add('metier', EntityType::class, array(
//                'class' => ProfilRecherche::class, 'choice_label' => 'metier',
//            ))
//            ->add('etq', EntityType::class, array(
//                'class' => ProfilRecherche::class, 'choice_label' => 'etq',
//            ))
//            ->add('competences', EntityType::class, array(
//                'class' => ProfilRecherche::class, 'choice_label' => 'competences',
//            ))
//            ->add('dispo', EntityType::class, array(
//                'class' => ProfilRecherche::class, 'choice_label' => 'dispo',
//            ))
//            ->add('ou', EntityType::class, array(
//                'class' => ProfilRecherche::class, 'choice_label' => 'ou',
//            ))
//            ->add('invest', EntityType::class, array(
//                'class' => ProfilRecherche::class, 'choice_label' => 'invest',
//            ))

            ->add('submit', SubmitType::class)
            ->add('publish', SubmitType::class)
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
