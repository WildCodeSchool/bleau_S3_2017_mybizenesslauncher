<?php
/**
 * Created by PhpStorm.
 * User: wcs-fontainebleau
 * Date: 23/05/17
 * Time: 14:54
 */
namespace MBLBundle\Form;

use MBLBundle\Form\CustomType\LocalisationFrType;
use MBLBundle\Form\CustomType\LocalisationItType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType
{
    private $locale;

	public function __construct(RequestStack $requestStack)
	{
		$this->locale = $requestStack->getCurrentRequest()->getLocale();
	}

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
	        ->remove('username')
	        ->add('nom')
            ->add('prenom')
            ->add('lng', HiddenType::class, array(
	            'data' => $this->locale,
                )
            )
            ->add('description')
            ->add('linkedin', UrlType::class, array(
                'required' => false
                )
            )

	        ->add('ville')

            ->add('metier', EntityType::class,
                array(
                    'class' => 'MBLBundle\Entity\Metier',
                    'choice_label' =>'metier'.$this->locale,
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => false,
                    'placeholder'=> 'Quel est votre profil?'

                )
            )
            ->add('etq', EntityType::class,
                array(
                    'class' => 'MBLBundle\Entity\ETQ',
                    'choice_label' =>'etq'.$this->locale,
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => false,
                    'placeholder'=> 'Disponible en tant que'

                )
            )
            ->add('ou', EntityType::class,
                array(
                    'class' => 'MBLBundle\Entity\Ou',
                    'choice_label' =>'ou'.$this->locale,
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => false,
                    'placeholder'=> 'Où ça ?'


                )
            )
            ->add('invest', EntityType::class,
                array(
                    'class' => 'MBLBundle\Entity\Invest',
                    'choice_label' =>'invest'.$this->locale,
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => false,
                    'placeholder'=> 'Investissement possible'

                )
            )

            ->add('dispo', EntityType::class,
                array(
                    'class' => 'MBLBundle\Entity\Dispo',
                    'choice_label' =>'dispo'.$this->locale,
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => false,
                    'placeholder'=> 'Votre disponibilité'

                )
            )
            ->add('competences', EntityType::class,
                array(
                    'class' => 'MBLBundle\Entity\Competences',
                    'choice_label' =>'competences'.$this->locale,
                    'multiple'=> true,
                    'expanded'=> false,
                    'required' => false

                )
            )
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array(
                'label' => 'form.email',
                'translation_domain' => 'FOSUserBundle',
                'error_bubbling' => true
                )
            )
            ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
                'error_bubbling' => true
                )
            );

	    if ($this->locale == "fr")
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