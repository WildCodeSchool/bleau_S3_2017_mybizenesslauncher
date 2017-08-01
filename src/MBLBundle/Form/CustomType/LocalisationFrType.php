<?php

namespace MBLBundle\Form\CustomType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class LocalisationFrType extends AbstractType
{
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'choices' => array(
				'Auvergne-Rhône-Alpes' => 'Auvergne-Rhône-Alpes',
				'Bourgogne-Franche-Comté' => 'Bourgogne-Franche-Comté',
				'Bretagne' => 'Bretagne',
				'Centre-Val de Loire' => 'Centre-Val de Loire',
				'Corse' => 'Corse',
				'Grand Est' => 'Grand Est',
				'Hauts-de-France' => 'Hauts-de-France',
				'Île-de-France' => 'Île-de-France',
				'Normandie' => 'Normandie',
				'Nouvelle-Aquitaine' => 'Nouvelle-Aquitaine',
				'Occitanie' => 'Occitanie',
				'Pays de la Loire' => 'Pays de la Loire',
				'Provence-Alpes-Côte d\'Azur' => 'Provence-Alpes-Côte d\'Azur',
				'Guadeloupe' => 'Guadeloupe',
				'Guyane' => 'Guyane',
				'Martinique' => 'Martinique',
				'Réunion' => 'Réunion',
				'Mayotte' => 'Mayotte',
				'Autre'   => 'autre',
			),
			'choices_as_values' => true,
		));
	}

	public function getParent()
	{
		return ChoiceType::class;
	}
}