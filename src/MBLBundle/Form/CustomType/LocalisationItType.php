<?php

namespace MBLBundle\Form\CustomType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class LocalisationItType extends AbstractType
{
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'choices' => array(
				'Abruzzo' => 'Abruzzo',
				'Alto Adige' => 'Alto Adige',
				'Basilicata' => 'Basilicata',
				'Calabria' => 'Calabria',
				'Campania' => 'Campania',
				'Centro' => 'Centro',
				'Emilia-Romagna' => 'Emilia-Romagna',
				'Friuli-Venezia Giulia' => 'Friuli-Venezia Giulia',
				'Lazio' => 'Lazio',
				'Liguria' => 'Liguria',
				'Lombardia' => 'Lombardia',
				'Marche' => 'Marche',
				'Molise' => 'Molise',
				'Piemonte' => 'Piemonte',
				'Puglia' => 'Puglia',
				'Sardegna' => 'Sardegna',
				'Sicilia' => 'Sicilia',
				'Toscana' => 'Toscana',
				'Trentino' => 'Trentino',
				'Umbria' => 'Umbria',
				'Valle d\'Aosta' => 'Valle d\'Aosta',
				'Veneto' => 'Veneto',
				'Altro'   => 'altro',
			),
			'choices_as_values' => true,
		));
	}

	public function getParent()
	{
		return ChoiceType::class;
	}
}