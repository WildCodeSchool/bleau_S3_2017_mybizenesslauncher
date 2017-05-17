<?php

namespace MBLBundle\Controller;

use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\DateTimeType;
use function Sodium\add;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@MBL/Users/index.html.twig');
    }

    public function addProjetAction(Request $request)
    {
        $projet = new Projet();

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $projet);
        $formBuilder
            ->add('titre', TextType::class)
            ->add('description', TextareaType::class)
            ->add('siteInternet', UrlType::class)
            ->add('ebustaUrl', UrlType::class)
            ->add('localisation', TextType::class)
            ->add('dateCreation', DateTimeType::class)
            ->add('secteur', ChoiceType::class)
            ->add('typeDeProjet', ChoiceType::class)
            ->add('profilsrecherches', ChoiceType::class)
            ->add('etq', ChoiceType::class)
            ->add('competences', CollectionType::class)
            ->add('dispo', ChoiceType::class)
            ->add('ou', ChoiceType::class)
            ->add('invest', ChoiceType::class)
            ->add('fichier', FileType::class)
            ->add('valider', SubmitType::class)
            ->add('publierProjet', SubmitType::class)
        ;

        $formAddProjet = $formBuilder->getForm();

        return $this->render('MBLBundle:Default:addProjet.html.twig',
            array('formAddProjet' => $formAddProjet->createView(),
            ))
    }
}
