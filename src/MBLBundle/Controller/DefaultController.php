<?php

namespace MBLBundle\Controller;

use MBLBundle\Entity\Projet;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Collections\Collection;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
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

    public function userHomepageAction()
    {
        return $this->render('@MBL/Users/UserHomePage.html.twig');

    }

    public function addProjetAction(Request $request)
    {
        $projet = new Projet();
        $form = $this->createForm('MBLBundle\Form\ProjetType', $projet);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $getDoctrine()->$getManager();
            $em->persist($projet);
            $em->flush();

            return $this->redirectToRoute('/');

        }


        return $this->render('MBLBundle:Users:addProjet.html.twig',
            array('form' => $form->createView(),
            ));
    }
}
