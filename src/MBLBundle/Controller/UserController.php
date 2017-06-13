<?php

namespace MBLBundle\Controller;

use MBLBundle\Entity\Profil;
use MBLBundle\Entity\ProfilRecherche;
use MBLBundle\Entity\Projet;
use MBLBundle\Form\ProjetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;



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

    public function editProfilAction()
    {
        return $this->render('@MBL/Users/editProfil.html.twig');
    }

    public function showProfilAction()
    {
        return $this->render('@MBL/Users/showProfil.html.twig');
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

    public function editProjectAction (Request $request, Projet $projet)
    {
        $form = $this->createForm(ProjetType::class, $projet);
//        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $projet->setDateCreation(new \DateTime());
//          $profil -> addprojet
//          $projet -> addprofil
            $em->persist($projet);
            $em->flush();
// Annonce de la réussite de l'actualisation
            $this->addFlash('success', 'Projet actualisé !');
            $id = $projet->getId();
            return $this->redirectToRoute('editProjet', array(
                'id' =>$id
            ));
        }
        return $this->render('@MBL/Users/editProject.html.twig',
            array(
                'form' => $form->createView(),
            ));
    }

    public function showProjetsProfilAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $profil = $this->getUser();

        $projects = $em->getRepository('MBLBundle:Projet')->FindBy($Profil);
        dump($projects);die();
        return $this->render('@MBL/Users/listProjetsProfil.html.twig', array(
            'projects'=> $projects,
        ));
    }

    public function createProfilRechercheProjectAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        if (!isset($id)){
            $id = $request->request->get("id");
        }
        $projet = $em->getRepository('MBLBundle:Projet')->findOneById($id);
        $profil_Recheche_exist = $projet->getProfilsrecherches() ;

//        $projet->getProfilRecherche
//        $profil_Recheche_exist = $em->getRepository('MBLBundle:ProfilRecherche')->myFindProject($projet->getId());

        $projet_profil = new ProfilRecherche();
        $form_pro = $this->createForm('MBLBundle\Form\ProfilRechercheType', $projet_profil);
        $form_pro->handleRequest($request);

        if ($request->isXmlHttpRequest()) {

            $em = $this->getDoctrine()->getManager();

            $projet->addProfilsrecherch($projet_profil);
            $projet_profil->addProjet($projet);
            $em->persist($projet_profil);
            $em->flush();

            $content = $this->renderView('@MBL/Users/profilsRechercheTemplate.html.twig', array(
                'profil'=>$projet_profil
            ));

            $response = new JsonResponse($content);

            return $response;

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

    public function showMyProjectAction()
    {
        $em = $this->getDoctrine()->getManager();
        $projects = $em->getRepository('MBLBundle:Projet')->findMyProject(40);

        return $this->render('@MBL/Users/showMyProject.html.twig', array(
            'projects' => $projects
        ));
    }

    public function createProfilAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $profil = $em->getRepository('MBLBundle:Profil')->findOneById($this->getUser()->getId());

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
