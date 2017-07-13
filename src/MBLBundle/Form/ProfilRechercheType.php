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

class ProfilRechercheType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('ou', EntityType::class,
                array(
                    'class' => Ou::class,
                    'choice_label' =>'ou',
                    'multiple'=> false,
                    'expanded'=> false

                ))


        ->add('metier', EntityType::class,
        array(
            'class' => Metier::class,
            'choice_label' =>'metier'.$options["locale"],
            'multiple'=> false,
            'expanded'=> false,
            'required' => false,
            'placeholder'=> 'Quel est votre profil?'
        ))
        ->add('etq', EntityType::class,
            array(
                'class' => ETQ::class,
                'choice_label' =>'etq'.$options["locale"],
                'multiple'=> false,
                'expanded'=> false,
                'required' => false,
                'placeholder'=> 'Disponible en tant que'
            ))
        ->add('ou', EntityType::class,
            array(
                'class' => Ou::class,
                'choice_label' =>'ou'.$options["locale"],
                'multiple'=> false,
                'expanded'=> false,
                'required' => false,
                'placeholder'=> 'Où ça ?'
            ))
        ->add('invest', EntityType::class,
            array(
                'class' => Invest::class,
                'choice_label' =>'invest'.$options["locale"],
                'multiple'=> false,
                'expanded'=> false,
                'required' => false,
                'placeholder'=> 'Investissement possible'
            ))
        ->add('dispo', EntityType::class,
            array(
                'class' => Dispo::class,
                'choice_label' =>'dispo'.$options["locale"],
                'multiple'=> false,
                'expanded'=> false,
                'required' => false,
                'placeholder'=> 'Votre disponibilité'
            ))
        ->add('competences', EntityType::class,
            array(
                'class' => Competences::class,
                'choice_label' =>'competences'.$options["locale"],
                'multiple'=> true,
                'expanded'=> false,
                'required' => false
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MBLBundle\Entity\ProfilRecherche',
            'locale' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mblbundle_profilrecherche';
    }


}
