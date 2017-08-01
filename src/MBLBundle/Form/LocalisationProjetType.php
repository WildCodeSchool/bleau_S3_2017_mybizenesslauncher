<?php

namespace MBLBundle\Form;

use MBLBundle\Form\CustomType\LocalisationFrType;
use MBLBundle\Form\CustomType\LocalisationItType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LocalisationProjetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
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
