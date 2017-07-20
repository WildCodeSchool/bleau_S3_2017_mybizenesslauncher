<?php

namespace MBLBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
use Symfony\Component\Form\Extension\Core\Type\CountryType;



class ProfilType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {   /*dump($options); die();*/
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
               $builder->add('localisation', ChoiceType::class, array(
                   'choices' => array(
                       'France' => array(
                           'Auvergne-Rhône-Alpes' => 'France, Auvergne-Rhône-Alpes',
                           'Bourgogne-Franche-Comté' => 'France, Bourgogne-Franche-Comté',
                           'Bretagne' => 'France, Bretagne',
                           'Centre-Val de Loire' => 'France, Centre-Val de Loire',
                           'Corse' => 'France, Corse',
                           'Grand Est' => 'France, Grand Est',
                           'Hauts-de-France' => 'France, Hauts-de-France',
                           'Île-de-France' => 'France, Île-de-France',
                           'Normandie' => 'France, Normandie',
                           'Nouvelle-Aquitaine' => 'France, Nouvelle-Aquitaine',
                           'Occitanie' => 'France, Occitanie',
                           'Pays de la Loire' => 'France, Pays de la Loire',
                           'Provence-Alpes-Côte d\'Azur' => 'Provence-Alpes-Côte d\'Azur',
                           'Guadeloupe' => 'France, Guadeloupe',
                           'Guyane' => 'France, Guyane',
                           'Martinique' => 'France, Martinique',
                           'Réunion' => 'France, Réunion',
                           'Mayotte' => 'France, Mayotte'
                       ),
                       'Autre'   => 'autre',

                   ),  'required'      => false,
                   'placeholder'   => 'Choisissez'
               ));
           }
           else
           {
               $builder->add('localisation', ChoiceType::class, array(
                   'choices' => array(
                       'Italie' => array(

                           'Abruzzo' => 'Italie, Abruzzo',
                           'Alto Adige' => 'Italie, Alto Adige',
                           'Basilicata' => 'Italie, Basilicata',
                           'Calabria' => 'Italie, Calabria',
                           'Campania' => 'Italie, Campania',
                           'Centro' => 'Italie, Centro',
                           'Emilia-Romagna' => 'Italie, Emilia-Romagna',
                           'Friuli-Venezia Giulia' => 'Italie, Friuli-Venezia Giulia',
                           'Lazio' => 'Italie, Lazio',
                           'Liguria' => 'Italie, Liguria',
                           'Lombardia' => 'Italie, Lombardia',
                           'Marche' => 'Italie, Marche',
                           'Molise' => 'Italie, Molise',
                           'Piemonte' => 'Italie, Piemonte',
                           'Puglia' => 'Italie, Puglia',
                           'Sardegna' => 'Italie, Sardegna',
                           'Sicilia' => 'Italie, Sicilia',
                           'Toscana' => 'Italie, Toscana',
                           'Trentino' => 'Italie, Trentino',
                           'Umbria' => 'Italie, Umbria',
                           'Valle d\'Aosta' => 'Italie, Valle d\'Aosta',
                           'Veneto' => 'Italie, Veneto'
                       ),
                       'Autre'   => 'autre',

                   ),  'required'      => false,
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
