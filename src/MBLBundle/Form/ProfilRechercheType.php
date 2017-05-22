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
        $builder->add('metier', EntityType::class,
            array(
                'class' => Metier::class,
                'choice_label' =>'metier',
                'multiple'=> false,
                'expanded'=> true

            ))
            ->add('etq', EntityType::class,
                array(
                    'class' => ETQ::class,
                    'choice_label' =>'etq',
                    'multiple'=> false,
                    'expanded'=> true

                ))
            ->add('ou', EntityType::class,
                array(
                    'class' => Ou::class,
                    'choice_label' =>'ou',
                    'multiple'=> false,
                    'expanded'=> true

                ))
            ->add('invest', EntityType::class,
                array(
                    'class' => Invest::class,
                    'choice_label' =>'invest',
                    'multiple'=> false,
                    'expanded'=> true

                ))

            ->add('dispo', EntityType::class,
                array(
                    'class' => Dispo::class,
                    'choice_label' =>'dispo',
                    'multiple'=> false,
                    'expanded'=> true

                ))
            ->add('competences', EntityType::class,
                array(
                    'class' => Competences::class,
                    'choice_label' =>'competences',
                    'multiple'=> true,
                    'expanded'=> true

                ))
            ->add('ajouter', SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MBLBundle\Entity\ProfilRecherche'
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
