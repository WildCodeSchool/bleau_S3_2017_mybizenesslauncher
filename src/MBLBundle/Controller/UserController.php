<?php

namespace MBLBundle\Controller;

use MBLBundle\Entity\Projet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('@MBL/Users/index.html.twig');

    }

    public function homepageProfilAction()
    {
        return $this->render('@MBL/Users/homepageProfil.html.twig');

    }
    public function editProfilAction()
    {
        return $this->render('@MBL/Users/editProfil.html.twig');

    }
    public function showProfilAction()
    {
        return $this->render('@MBL/Users/showProfil.html.twig');

    }
    public function addProjetAction(Request $request)
    {
        $projet = new Projet();
        $form = $this->createForm('MBLBundle\Form\ProjetType', $projet);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($projet);
            $em->flush();

            return $this->redirectToRoute('homepageProfil');
        }

        return $this->render('@MBL/Users/addProjet.html.twig',
            array('form' => $form->createView(),

            ));
    }
    public function addProfilAction(Request $request)
    {
        $profil = new Profil();
        $form = $this->createForm('MBLBundle\Form\ProfilType', $profil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $getDoctrine()->$getManager();
            $em->persist($profil);
            $em->flush();

            return $this->redirectToRoute('/');
        }
        return $this->render('MBLBundle:Users:addProfil.html.twig',
            array('form' => $form->createView(),
            ));
    }
}
