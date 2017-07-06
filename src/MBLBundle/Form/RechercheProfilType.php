<?php
/**
 * Created by PhpStorm.
 * User: wcs-fontainebleau
 * Date: 05/07/17
 * Time: 09:54
 */

namespace MBLBundle\Form;


use MBLBundle\Entity\Metier;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RechercheProfilType extends AbstractType
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
                'expanded'=> false,
                'required' => false,
                'placeholder'=> ' Quel est votre profil?'
            ))
            ->add('localisation', LocalisationProfilType::class)
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
