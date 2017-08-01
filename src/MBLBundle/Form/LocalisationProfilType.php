<?php

namespace MBLBundle\Form;

use MBLBundle\Form\CustomType\LocalisationFrType;
use MBLBundle\Form\CustomType\LocalisationItType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use MBLBundle\Entity\Metier;


class LocalisationProfilType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('metier', EntityType::class,
            array(
                'class' => Metier::class,
                'choice_label' =>'metier' .$options["locale"],
                'multiple'=> false,
                'expanded'=> false,
                'required' => false,
                'placeholder'=> 'Quel est votre profil?'


            ));
        if ($options["locale"] == "fr")
        {
            $builder->add('localisation', LocalisationFrType::class, array(
	            'required'      => false,
                'placeholder'   => 'Choisissez'
            ));
        }
        else
        {
            $builder->add('localisation', LocalisationItType::class, array(
	            'required'      => false,
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
            'data_class' => 'MBLBundle\Entity\Profil',
            'locale'=> null
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
