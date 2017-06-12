<?php
/**
 * Created by PhpStorm.
 * User: wcs-fontainebleau
 * Date: 23/05/17
 * Time: 14:54
 */
namespace MBLBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use MBLBundle\Entity\Competences;
use MBLBundle\Entity\Dispo;
use MBLBundle\Entity\ETQ;
use MBLBundle\Entity\Invest;
use MBLBundle\Entity\Metier;
use MBLBundle\Entity\Ou;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
                ->add('prenom')
                ->remove('username')
                ->add('description')
                ->add('linkedin')
                ->add('localisation')
                ->add('metier', EntityType::class,
                              array(
                                  'class' => Metier::class,
                                  'choice_label' =>'metier',
                                  'multiple'=> false,
                                  'expanded'=> false,
                                  'required' => false

                              ))
                ->add('etq', EntityType::class,
                          array(
                              'class' => ETQ::class,
                              'choice_label' =>'etq',
                              'multiple'=> false,
                              'expanded'=> false,
                              'required' => false

                          ))
                ->add('ou', EntityType::class,
                          array(
                              'class' => Ou::class,
                              'choice_label' =>'ou',
                              'multiple'=> false,
                              'expanded'=> false,
                              'required' => false


                          ))
                ->add('invest', EntityType::class,
                          array(
                              'class' => Invest::class,
                              'choice_label' =>'invest',
                              'multiple'=> false,
                              'expanded'=> false,
                              'required' => false

                          ))

                ->add('dispo', EntityType::class,
                          array(
                              'class' => Dispo::class,
                              'choice_label' =>'dispo',
                              'multiple'=> false,
                              'expanded'=> false,
                              'required' => false

                          ))
                ->add('competences', EntityType::class,
                          array(
                              'class' => Competences::class,
                              'choice_label' =>'competences',
                              'multiple'=> true,
                              'expanded'=> false,
                              'required' => false

                          ));


                                    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }


}