<?php

namespace MBLBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use MBLBundle\Entity\Competences;
use MBLBundle\Entity\Dispo;
use MBLBundle\Entity\ETQ;
use MBLBundle\Entity\Invest;
use MBLBundle\Entity\Metier;
use MBLBundle\Entity\Ou;


class ProfilType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class, array('required' => true))
            ->add('prenom', TextType::class, array('required' => true))
            ->add('description', TextareaType::class)
            ->add('linkedIn')
            ->add('localisation')
            ->add('metier', EntityType::class,
                array(
                    'class' => Metier::class,
                    'choice_label' =>'metier',
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => false,
                    'placeholder'=> ' Quel est votre profil?'
            ))
            ->add('etq', EntityType::class,
                array(
                    'class' => ETQ::class,
                    'choice_label' =>'etq',
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => false,
                    'placeholder'=> ' Disponible en tant que'
                ))
            ->add('ou', EntityType::class,
                array(
                    'class' => Ou::class,
                    'choice_label' =>'ou',
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => false,
                    'placeholder'=> ' Où ça ?'
                ))
            ->add('invest', EntityType::class,
                array(
                    'class' => Invest::class,
                    'choice_label' =>'invest',
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => false,
                    'placeholder'=> ' Investissement possible'
                ))
            ->add('dispo', EntityType::class,
                array(
                    'class' => Dispo::class,
                    'choice_label' =>'dispo',
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => false,
                    'placeholder'=> ' Votre disponibilité'
                ))
            ->add('competences', EntityType::class,
                array(
                    'class' => Competences::class,
                    'choice_label' =>'competences',
                    'multiple'=> true,
                    'expanded'=> false,
                    'required' => false
                ))
            ->add('fichier', FichierType::class)
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MBLBundle\Entity\Profil'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mblbundle_profil';
    }

}
