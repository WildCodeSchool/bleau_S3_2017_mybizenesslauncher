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
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use MBLBundle\Entity\Competences;
use MBLBundle\Entity\Dispo;
use MBLBundle\Entity\ETQ;
use MBLBundle\Entity\Invest;
use MBLBundle\Entity\Metier;
use MBLBundle\Entity\Ou;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
                ->add('prenom')
                ->remove('username')
                ->add('description')
                ->add('linkedin', UrlType::class)
                ->add('localisation', ChoiceType::class, array(
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

                                                    ),
                                                    'preferred_choices' => array('Italie', 'arr')))
                ->add('ville')
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