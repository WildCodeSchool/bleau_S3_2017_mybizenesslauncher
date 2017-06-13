<?php

namespace MBLBundle\Controller;

use MBLBundle\Entity\Profil;
use MBLBundle\Entity\ProfilRecherche;
use MBLBundle\Entity\Projet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class UserController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository('MBLBundle:Projet')->findLast4();

        return $this->render('@MBL/Users/index.html.twig',
            array('projet' => $projet,
            ));
    }

    public function homepageProfilAction()
    {
        return $this->render('@MBL/Users/homepageProfil.html.twig');

    }

    public function editProfilAction(Request $request)
    {
        $profil=$this->getUser();
        $editForm = $this->createForm('MBLBundle\Form\ProfilType', $profil);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('showProfil');
        }

        return $this->render('@MBL/Users/editProfil.html.twig', array(
            'profilType' => $profil,
            'edit_form' => $editForm->createView(),
        ));
    }

    public function showProfilAction()
    {//
        $profil=$this->getUser();
        return $this->render('@MBL/Users/showProfil.html.twig', array(
            'profilType'=>$profil,//
        ));
    }

    public function createProjectAction(Request $request)
    {
        $projet = new Projet();
        $form = $this->createForm('MBLBundle\Form\ProjetType', $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $projet->setDateCreation(new \DateTime());
//          $profil -> addprojet
//          $projet -> addprofil
            $em->persist($projet);
            $em->flush();
            $id = $projet->getId();
            return $this->redirectToRoute('createProfilRechercheProjet', array(
                'id' =>$id
            ));
        }


        return $this->render('@MBL/Users/createProjet.html.twig',
            array(
                'form' => $form->createView(),
                


            ));
    }
    public function createProfilRechercheProjectAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository('MBLBundle:Projet')->findOneById($id);
        $profil_Recheche_exist = $projet->getProfilsrecherches() ;

//        $projet->getProfilRecherche
//        $profil_Recheche_exist = $em->getRepository('MBLBundle:ProfilRecherche')->myFindProject($projet->getId());

        $projet_profil = new ProfilRecherche();
        $form_pro = $this->createForm('MBLBundle\Form\ProfilRechercheType', $projet_profil);
        $form_pro->handleRequest($request);

        if ($form_pro->isSubmitted() && $form_pro->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $projet->addProfilsrecherch($projet_profil);
            $projet_profil->addProjet($projet);
            $em->persist($projet_profil);

            $em->flush();

            return $this->redirectToRoute('createProfilRechercheProjet', array(
                'id' =>$id
            ));
        }

        return $this->render('@MBL/Users/createProjetAddProfil.html.twig',
            array('form_pro' => $form_pro->createView(),
                'projet' => $projet,
'profil_Recheche_exist' => $profil_Recheche_exist,

            ));
    }
    public function showProjectAction()
    {

        $em = $this->getDoctrine()->getManager();
        $projects = $em->getRepository('MBLBundle:Projet')->findAllDesc();

        return $this->render('@MBL/Users/showProject.html.twig', array(
            'projects'=> $projects,
        ));

    }

    public function createProfilAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $profil = $em->getRepository('MBLBundle:Profil')->findOneById($this->getUser()->getId());

dump($profil);die();
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
