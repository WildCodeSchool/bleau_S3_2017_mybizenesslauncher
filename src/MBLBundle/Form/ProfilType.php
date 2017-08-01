<?php
namespace MBLBundle\Form;

use MBLBundle\Form\CustomType\LocalisationFrType;
use MBLBundle\Form\CustomType\LocalisationItType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
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
        $builder
            ->add('nom', TextType::class, array('required' => true))
            ->add('prenom', TextType::class, array('required' => true))
            ->add('description', TextareaType::class, array('required' => true))
            ->add('linkedIn', UrlType::class, array(
                'required' => false,
                'data' => ' http://VotrelinkedIn'
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
        $builder->add('ville')
            ->add('metier', EntityType::class,
                array(
                    'class' => Metier::class,
                    'choice_label' =>'metier'.$options["locale"],
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => true,
                    'placeholder'=> 'Quel est votre profil?'
                ))
            ->add('etq', EntityType::class,
                array(
                    'class' => ETQ::class,
                    'choice_label' =>'etq'.$options["locale"],
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => true,
                    'placeholder'=> 'Disponible en tant que'
                ))
            ->add('ou', EntityType::class,
                array(
                    'class' => Ou::class,
                    'choice_label' =>'ou'.$options["locale"],
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => true,
                    'placeholder'=> 'Où ça ?'
                ))
            ->add('invest', EntityType::class,
                array(
                    'class' => Invest::class,
                    'choice_label' =>'invest'.$options["locale"],
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => true,
                    'placeholder'=> 'Investissement possible'
                ))
            ->add('dispo', EntityType::class,
                array(
                    'class' => Dispo::class,
                    'choice_label' =>'dispo'.$options["locale"],
                    'multiple'=> false,
                    'expanded'=> false,
                    'required' => true,
                    'placeholder'=> 'Votre disponibilité'
                ))
            ->add('competences', EntityType::class,
                array(
                    'class' => Competences::class,
                    'choice_label' =>'competences'.$options["locale"],
                    'multiple'=> true,
                    'expanded'=> false,
                    'required' => true
                ))
            ->add('fichier', FichierType::class, array(
                'required' => false
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MBLBundle\Entity\Profil',
            'locale'=>null
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