<?php
/**
 * Created by PhpStorm.
 * User: wcs-fontainebleau
 * Date: 23/05/17
 * Time: 14:54
 */
namespace MBLBundle\Form;

use MBLBundle\MBLBundle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use MBLBundle\Entity\Competences;
use MBLBundle\Entity\Dispo;
use MBLBundle\Entity\ETQ;
use MBLBundle\Entity\Invest;
use MBLBundle\Entity\Metier;
use MBLBundle\Entity\Ou;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\OptionsResolver\OptionsResolver;



class RegistrationType extends AbstractType
{
    private $locale;

    public function __construct($locale)
    {
        $this->locale = $locale;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
            ->add('prenom')
            ->remove('username')
            ->add('description')
            ->add('linkedin', UrlType::class)
            ->add('localisation'.$this->locale, CountryType::class, array(
                'required' => true
            ))
            ->add('metier', EntityType::class,
                array(
                    'class' => 'MBLBundle\Entity\Metier',
                    'choice_label' =>'metier'.$this->locale,
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => false,
                    'placeholder'=> ' Quel est votre profil?'

                ))
            ->add('etq', EntityType::class,
                array(
                    'class' => 'MBLBundle\Entity\ETQ',
                    'choice_label' =>'etq'.$this->locale,
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => false,
                    'placeholder'=> ' Disponible en tant que'

                ))
            ->add('ou', EntityType::class,
                array(
                    'class' => 'MBLBundle\Entity\Ou',
                    'choice_label' =>'ou'.$this->locale,
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => false,
                    'placeholder'=> ' Où ça ?'


                ))
            ->add('invest', EntityType::class,
                array(
                    'class' => 'MBLBundle\Entity\Invest',
                    'choice_label' =>'invest'.$this->locale,
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => false,
                    'placeholder'=> ' Investissement possible'

                ))

            ->add('dispo', EntityType::class,
                array(
                    'class' => 'MBLBundle\Entity\Dispo',
                    'choice_label' =>'dispo'.$this->locale,
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => false,
                    'placeholder'=> ' Votre disponibilité'

                ))
            ->add('competences', EntityType::class,
                array(
                    'class' => 'MBLBundle\Entity\Competences',
                    'choice_label' =>'competences'.$this->locale,
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
            'data_class' => 'MBLBundle\Entity\Profil'
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