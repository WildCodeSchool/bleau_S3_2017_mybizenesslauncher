<?php

namespace MBLBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
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
