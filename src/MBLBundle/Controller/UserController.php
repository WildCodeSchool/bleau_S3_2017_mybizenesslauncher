<?php

namespace MBLBundle\Controller;

use MBLBundle\Entity\Chat;
use MBLBundle\Entity\Fichier;
use MBLBundle\Entity\Profil;
use MBLBundle\Entity\ProfilRecherche;
use MBLBundle\Entity\Projet;
use MBLBundle\Entity\Text;
use MBLBundle\Form\FichierType;
use MBLBundle\Form\ProjetType;
use MBLBundle\MBLBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class UserController extends Controller
{
    public function indexAction(Request $request)
    {
        $locale= $request->getLocale();

        $em = $this->getDoctrine()->getManager();
        $projets = $em->getRepository('MBLBundle:Projet')->findLastProjets4($locale);
        $profils = $em->getRepository('MBLBundle:Profil')->findLastProfils4($locale);

        return $this->render('@MBL/Users/index.html.twig', array(
            'projet' => $projets,
            'profils' =>$profils,
            'locale'=>$locale
        ));
    }

    public function homepageProfilAction()
    {
        return $this->render('@MBL/Users/homepageProfil.html.twig');
    }

    public function editProfilAction(Request $request)
    {
        $locale= $request->getLocale();
        $profil = $this->getUser();
        $editForm = $this->createForm('MBLBundle\Form\ProfilType', $profil, array('locale'=>$locale));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('showProfil' , array('id' => $profil->getId()));
        }

        return $this->render('@MBL/Users/editProfil.html.twig', array(
            'profilType' => $profil,
            'edit_form' => $editForm->createView(),
        ));
    }

    public function showProfilAction(Request $request, Profil $profil)
    {
        $locale = $request->getLocale();
        $idProfil = $profil->getId();
        $em = $this->getDoctrine()->getManager();
        $pro = $em->getRepository('MBLBundle:Profil')->MyfindProfilById($idProfil, $locale);
        $result = $pro[0];

        return $this->render('@MBL/Users/showProfil.html.twig', array(
            'profil' => $result,
        ));
    }
    public function showMyProfilAction(Request $request)
    {
        $profil = $this->getUser();
        $locale = $request->getLocale();
        $idProfil = $profil->getId();
        $em = $this->getDoctrine()->getManager();
        $pro = $em->getRepository('MBLBundle:Profil')->MyfindProfilById($idProfil, $locale);
        $result = $pro[0];
        return $this->render('@MBL/Users/showMyProfil.html.twig', array(
            'profil' => $result,
        ));
    }
    public function showAllProfilsAction(Request $request)
    {

        $locale = $request->getLocale();

        $form_loc = $this->createForm('MBLBundle\Form\LocalisationProfilType',null , array('locale' => $locale));

        $em = $this->getDoctrine()->getManager();

        $idloc = $request->request->get('mblbundle_profil')['localisation'];
        $idmetier = $request->request->get('mblbundle_profil')['metier'];

            if (!empty($idloc) && !empty($idmetier))
        {
            $profils = $em->getRepository('MBLBundle:Profil')->myfindByMetLoc($idmetier, $idloc, $locale);
//            dump($profils);die();
        }
        elseif(!empty($idloc) || !empty($idmetier))
        {
            if (!empty($idloc))
            {
                $profils = $em->getRepository('MBLBundle:Profil')->myfindByLocalisation($idloc, $locale);
            }
            else
            {
                $profils = $em->getRepository('MBLBundle:Profil')->myfindByMet($idmetier, $locale);
            }

        }
        else
        {
            $profils = $em->getRepository('MBLBundle:Profil')->myfindByLocale($locale);
        }


        return $this->render('@MBL/Users/showAllProfils.html.twig', array(
            'profils'=>$profils,
            'form_localisation' => $form_loc->createView()//
        ));
    }

    public function createProjectAction(Request $request)
    {
        $locale = $request->getLocale();

        $projet = new Projet();

        $form = $this->createForm('MBLBundle\Form\ProjetType', $projet, array('locale' => $locale));
        $form->handleRequest($request);

        $profil = $this->getUser();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $projet->setDateCreation(new \DateTime());
            $projet->addprofil($this->getUser());
            $profil->addprojet($projet);
            $em->persist($projet);
            $em->flush();
            $id = $projet->getId();
            return $this->redirectToRoute('createProfilRechercheProjet', array(
                'id' => $id
            ));
        }
        return $this->render('@MBL/Users/createProjet.html.twig',
            array(
                'form' => $form->createView(),
                'locale' => $locale
            ));
    }

    /**
     * Displays a form to edit an existing project entity linked to a member profile.
     * @param Request $request
     * @param Projet $projet
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function editProjectAction(Request $request, Projet $projet)
    {
        $locale = $request->getLocale();

        $form = $this->createForm(ProjetType::class, $projet, array('locale' => $locale));
        $form->handleRequest($request);
        $profil_Recheche_exist = $projet->getProfilsrecherches();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $projet->setDateCreation(new \DateTime());
            $em->flush();
            $id = $projet->getId();
            return $this->redirectToRoute('showMyProject', array(
                'id' => $id
            ));
        }
        return $this->render('@MBL/Users/createProjet.html.twig',
            array(
                'projet' => $projet,
                'profil_exist' => $profil_Recheche_exist,
                'locale' => $locale,

                'form' => $form->createView(),
            ));
    }
// Ajout d'un profil dans la création d'un projet

    public function createProfilRechercheProjectAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $locale = $request->getLocale();
        if (!isset($id)) {
            $id = $request->request->get("id");
        }
        $projet = $em->getRepository('MBLBundle:Projet')->findOneById($id);

//        $projetvue = $em->getRepository('MBLBundle:Projet')->myfindOneById($id, $locale);
        $profil_Recheche_exist =  $em->getRepository('MBLBundle:ProfilRecherche')->myfindByProjet($projet, $locale);
        

        $projet_profil = new ProfilRecherche();
        $form_pro = $this->createForm('MBLBundle\Form\ProfilRechercheType', $projet_profil, array('locale' => $locale));
        $form_pro->handleRequest($request);

        if ($request->isXmlHttpRequest()) {

            $em = $this->getDoctrine()->getManager();

            $projet->addProfilsrecherch($projet_profil);
            $projet_profil->addProjet($projet);
            $em->persist($projet_profil);
            $em->flush();

            $content = $this->renderView('@MBL/Users/profilsRechercheTemplate.html.twig', array(
                'profil' => $projet_profil
            ));

            $response = new JsonResponse($content);

            return $response;

        }

        return $this->render('@MBL/Users/createProjetAddProfil.html.twig',
            array('form_pro' => $form_pro->createView(),
                'projet' => $projet,
                'locale' => $locale,
                'profil_Recheche_exist' => $profil_Recheche_exist,

            ));
    }
    // edit du profil recherché dans le edit project

    public function newProfilRechercheProjectAction(Request $request, Projet $projet)
    {

        $em = $this->getDoctrine()->getManager();

        $profil_Recheche_exist = $projet->getProfilsrecherches();

        $projet_profil = new ProfilRecherche();
        $form_pro = $this->createForm('MBLBundle\Form\ProfilRechercheType', $projet_profil);
        $form_pro->handleRequest($request);

        if ($form_pro->isValid()&&$form_pro->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();

            $projet->addProfilsrecherch($projet_profil);
            $projet_profil->addProjet($projet);
            $em->persist($projet_profil);
            $em->flush();

            return $this->redirectToRoute('editProjet', array('id'=>$projet->getId()));
        }

        return $this->render('@MBL/Users/editProjetAddProfil.html.twig',

            array('form_pro' => $form_pro->createView(),
                'projet' => $projet,
                'profil_Recheche_exist' => $profil_Recheche_exist,

            ));
    }
    public function editProfilRechercheProjectAction(Request $request, ProfilRecherche $profilRecherche)
    {

        $em = $this->getDoctrine()->getManager();
        $projet = $profilRecherche->getProjets()[0];

        $form_pro = $this->createForm('MBLBundle\Form\ProfilRechercheType', $profilRecherche);
        $form_pro->handleRequest($request);

        if ($form_pro->isValid()&&$form_pro->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();

            $em->flush();

            return $this->redirectToRoute('editProjet', array('id'=>$projet->getId()));
        }

        return $this->render('@MBL/Users/editProjetAddProfil.html.twig',

            array('form_pro' => $form_pro->createView(),
                'projet' => $projet,


            ));
    }
    public function deleteProfilRechercheAction(Request $request, ProfilRecherche $profilRecherche)
    {
        $em = $this->getDoctrine()->getManager();
//        dump($profilRecherche);die();
        $projet = $profilRecherche->getProjets()[0];
        $em->remove($profilRecherche);
        $content = new JsonResponse($profilRecherche);
        $em->flush();
        return $content;
    }
    /**
     * @param ProfilRecherche $profilRecherche
     * @return mixed
     */
    public function deleteProfilRAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->request->get('id');
        $profilRecherche = $em->getRepository('MBLBundle:ProfilRecherche')->findOneById($id);
        $em->remove($profilRecherche);
        $content = new JsonResponse($profilRecherche);
        $em->flush();

        return $content;
    }

    public function showProjectAction(Request $request)
    {
//        dump($request); die();

        $locale= $request->getLocale();

        $em = $this->getDoctrine()->getManager();

        $form_secteur = $this->createForm('MBLBundle\Form\ProjetRechercheType', null, array('locale'=>$locale));

//        Récupération des ID de secteur et TYpe de projet depuis Parcourir les projets

        $idSec = $request->request->get('mblbundle_projet')['secteur'];
        $idTyp = $request->request->get('mblbundle_projet')['typeDeProjet'];
        $Loc = $request->request->get('mblbundle_projet')['localisation']['localisation'];



//        // Ajout des filtres
//
//        // Si les deux filtres sont selectionné on utilise la méthode écrite dans répositoryProjet
        if (is_numeric($idSec) && is_numeric($idTyp) && !empty($Loc))
        {
            $projects = $em->getRepository('MBLBundle:Projet')->myfindByTypSecLoc($idSec, $idTyp, $Loc, $locale);
        }

        elseif (!empty($Loc))
        {
            if(is_numeric($idSec) || is_numeric($idTyp))
            {
                if(is_numeric($idSec))
                {
                    $projects = $em->getRepository('MBLBundle:Projet')->myfindBySecteurLoc($idSec, $Loc, $locale);
                }
                else
                {
                    $projects = $em->getRepository('MBLBundle:Projet')->myfindByTypeDeProjetLoc($idTyp, $Loc, $locale);
                }
            }
            elseif (!is_numeric($idSec) && !is_numeric($idTyp) && !empty($Loc))
            {
                $projects = $em->getRepository('MBLBundle:Projet')->findByLocalisation($Loc);
            }

        }
        //Si un filtre est selectionné on choisit lequel des deux a été envoyé et on utilise la méthode écrite dans répositoryProjet
        elseif (is_numeric($idSec) && is_numeric($idTyp))
        {
            $projects = $em->getRepository('MBLBundle:Projet')->myfindByTypEtSec($idSec, $idTyp, $locale);
        }
        elseif (is_numeric($idSec) || is_numeric($idTyp))
        {
            if(is_numeric($idSec))
            {
//                dump($idSec);die();
                $projects = $em->getRepository('MBLBundle:Projet')->myfindBySecteur($idSec, $locale);
            }
            else
            {

                $projects = $em->getRepository('MBLBundle:Projet')->myfindByTypeDeProjet($idTyp, $locale);
            }
        }

//        //Sinon on récupérera tous les projets
        else
        {
            $projects = $em->getRepository('MBLBundle:Projet')->findAllDesc($locale);

        }

        return $this->render('@MBL/Users/showProject.html.twig', array(

            'projects'=> $projects,
            'form_secteur' =>$form_secteur->createView(),
            'locale' => $locale


        ));
    }

    public function showMyProjectAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $this->getUser();
        $locale = $request->getLocale();


        $projects = $em->getRepository('MBLBundle:Projet')->myfindAllMyProjects($id, $locale);

        return $this->render('@MBL/Users/showMyProject.html.twig', array(
            'projects' => $projects
        ));
    }

    /**
     * Displays an existing project entity linked to a member profile
     *
     * @param $id
     * @param Profil $profil
     * @return Response
     */
    public function showOneProjectAction(Request $request, Projet $projet, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $locale = $request->getLocale();
        $projeto = $em->getRepository('MBLBundle:Projet')->myfindOneById($id, $locale);
        $pro = $projeto[0];
        $profils = $projet->getProfils(); //TODO attention lorsque l'on aura lié plusieurs projets et utilisateurs
        $prof = $profils[0]->getId();
        $profils = $em->getRepository('MBLBundle:Profil')->myfindProfilById($id, $locale);
        $profils = $profils[0];
        return $this->render('@MBL/Users/showOneProject.html.twig', array(
            'projet' => $pro,
            'profil' => $profils,
        ));
    }

    /**
     * @param Projet|null $projet
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteMyProjectAction(Projet $projet = null, $id)
    {
        if ($projet != null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($projet);
            $em->flush();
//            $this->get('session')->getFlashBag()->add('notice', 'Le projet a bien été supprimé');
            return $this->redirectToRoute('showMyProject');
        }
        else {
//            $this->get('session')->getFlashBag()->add('notice', 'Le projet recherché n\'existe pas');
            return $this->redirectToRoute('showMyProject');
        }
    }
//Dans la section Chat lorsque l'on ajoute un msg
    public function chatIndexAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $currentUser = $this->getUser();
        //Nouveau text
        $text = new Text();
        // Le chat correspondant à la discussion selectionnée
        $chat = $em->getRepository('MBLBundle:Chat')->findOneById($id);

        $text_content = $em->getRepository('MBLBundle:Text')->myfindOneByChatId($id);


        //l'ensemble des chats pour lesquelles l'utilisateur peut discuter
        $chats = $em->getRepository('MBLBundle:Chat')->myfindByProfil($currentUser);

        $form_text = $this->createForm('MBLBundle\Form\TextType', $text);
        $form_text->handleRequest($request);

        if ($request->isXmlHttpRequest()){

            //on ajoute le text au chat et le chat au text
            $chat->addMsg($text);
            $text->addChat($chat);
            //on set au champs profil le prenom
            $text->setProfil($this->getUser()->getPrenom());
            $em->persist($text);
            $em->flush();

            $content = $this->renderView('@MBL/Users/textChatTemplate.html.twig', array(
                'text' => $text
            ));
            $response = new JsonResponse($content);
            return $response;
        }

        return $this->render('@MBL/Users/Chat.html.twig', array(
            'chat' => $chat,
            'texts' => $text_content,
            'chats'=> $chats,
            'form' => $form_text->createView()
        ));

    }
//Dans la section connection des chats
    public function chatConnectAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $currentUser = $this->getUser();
        $connectedUser = $em->getRepository('MBLBundle:Profil')->findOneById($id);

//        Verifier qu'une connection n'existe pas déjà entre les deux utilisateurs

        $chatexist = $em->getRepository('MBLBundle:Chat')->myFindChatExist($currentUser, $connectedUser);

        if(!empty($chatexist))
        {
            // Si oui il existe déjà on envoi un message à l'utilisateur qu'il ne peut se connecter
            $this->get('session')->getFlashBag()->add('error', 'Vous etes déjà connecté avec cette personne');
            return $this->redirectToRoute('showAllProfils');
        }
        // Sinon on ajoute un objet chat
        $chat = new Chat();

        //On lui donne ajoute le profil de l'utilisateur ayant créé la demande de connection
        $chat->addProfil($connectedUser);
        //Et également celui avec qui l'on veut se connecter
        $chat->addProfil($currentUser);
        //Pareil pour le chat
        $connectedUser->addChat($chat);
        $currentUser->addChat($chat);
        //On ajoute au champs connection du créateur en lui donnant l'id du créateur
        $chat->setConnectionbyidcreator($currentUser->getId());
        //Et on set à 0 celui avec qui on veut se connecter, le chat n'est donc pas encore utilisable
        //Celui avec qui l'on veut se connecter va maintenant avoir la possibiliter d'accepter sur son mur de connection
        $chat->setConnectionbyid(0);
        $em->persist($chat);
        $em->flush();

        return $this->redirectToRoute('connect');
    }

    public function connectAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        // on fait la vérification de savoir si il y a un chat selectionné
        if(is_numeric($id))
        {
            //si oui on set le chat pour qu'il soit opérationnel
            $connectId =$this->getUser()->getId();
            $chat = $em->getRepository('MBLBundle:Chat')->findOneById($id);
            $chat->setConnectionbyid($connectId);
            $em->flush();
        }
        $currentUser = $this->getUser();
        //Envoie de mes chats par rapport aux profils de l'utilisateur qui consulte le site
        $chats = $em->getRepository('MBLBundle:Chat')->myfindByProfil($currentUser);
        return $this->render('@MBL/Users/connection.html.twig', array(
            'chats' => $chats,
        ));
    }
    public function chatDisconnectAction(Chat $chat)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($chat);
        $em->flush();
        $currentUser = $this->getUser();
        //Envoie de mes chats par rapport aux profils de l'utilisateur qui consulte le site
        $chats = $em->getRepository('MBLBundle:Chat')->myfindByProfil($currentUser);
        return $this->render('@MBL/Users/connection.html.twig', array(
            'chats' => $chats,
        ));
    }
}
