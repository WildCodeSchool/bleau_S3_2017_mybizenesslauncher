<?php

namespace MBLBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
            ->add('prenom')
            ->add('description')
            ->add('linkedIn')
            ->add('localisation');
//            ->add('invest')
//            ->add('etq')
//            ->add('dispo')
//            ->add('ou')
//            ->add('metier')
//            ->add('competences');
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
