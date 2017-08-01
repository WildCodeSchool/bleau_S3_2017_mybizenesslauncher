<?php

namespace MBLBundle\Controller;

use MBLBundle\Entity\Chat;
use MBLBundle\Entity\Profil;
use MBLBundle\Entity\ProfilRecherche;
use MBLBundle\Entity\Projet;
use MBLBundle\Entity\Text;
use MBLBundle\Form\ProjetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{

	public function changeLocaleAction(Request $request, $locale)
	{
		$request->setLocale($locale);
		$this->redirectToRoute('mbl_homepage');
	}

    public function countDemandeContactAction()
    {
        $content = 0;
        $zero = 0;
        if(!is_null($this->getUser()))
        {
            $em = $this->getDoctrine()->getManager();
            $current = $this->getUser();
            $currentId = $current->getId();
            $countContact = $em->getRepository('MBLBundle:Chat')->myQueriesForContact($current, $currentId, $zero);
            $count = count($countContact);

            $content =  $this->renderView('@MBL/Templates/demandeContact.html.twig', array(
                'demandeContact' => $count));

        }
        return new Response($content);
    }
    public function countViewsAction()
    {
        $content = 0;
        $zero = 0;
        if(!is_null($this->getUser()))
        {
            $em = $this->getDoctrine()->getManager();
            $current = $this->getUser();
            $countViews = $em->getRepository('MBLBundle:Text')->myFindViews($current);

            $content =  $this->renderView('@MBL/Users/countView.html.twig', array(
                'count' => $countViews['nbmsg']));

        }
        return new Response($content);
    }

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
        $profilId = $this->getUser()->getId();
        $locale = $request->getLocale();

        $em = $this->getDoctrine()->getManager();
        $pro = $em->getRepository('MBLBundle:Profil')->MyfindProfilById($profilId, $locale);
        $result = $pro[0];
        return $this->render('@MBL/Users/showMyProfil.html.twig', array(
            'profil' => $result,
        ));
    }
    public function showAllProfilsAction(Request $request, $page)
    {

        $locale = $request->getLocale();
        $form_loc = $this->createForm('MBLBundle\Form\LocalisationProfilType',null , array('locale' => $locale));
        $em = $this->getDoctrine()->getManager();

        if ( $page >= 1)
        {

            $profils = $em->getRepository('MBLBundle:Profil')->myfindByLocale($locale, 12, $page);
            $nbProfils =  $em->getRepository('MBLBundle:Profil')->countProfils($locale);
        }
        else
        {
            $profils = $em->getRepository('MBLBundle:Profil')->myfindByLocale($locale, 12, 1);
            $nbProfils =  $em->getRepository('MBLBundle:Profil')->countProfils($locale);
        }

        if ($request->isMethod('POST'))
        {
            $idloc = $request->request->get('mblbundle_profil')['localisation'];
            $idmetier = $request->request->get('mblbundle_profil')['metier'];
            if (is_null($page))
            {
                $page = 1;
            }
            $profils = $em->getRepository('MBLBundle:Profil')->myfindByVDeux($locale,12, $page, $idloc, $idmetier);
            $nbProfils = count($profils);
        }

        return $this->render('@MBL/Users/showAllProfils.html.twig', array(
            'profils'=>$profils,
            'nombrePage' => ceil($nbProfils/12),
            'form_localisation' => $form_loc->createView()
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
            $projet->setLngp($locale);
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
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(ProjetType::class, $projet, array('locale' => $locale));
        $form->handleRequest($request);

        $profil_Recheche_exist = $em->getRepository('MBLBundle:ProfilRecherche')->myfindByProjet($projet, $locale);
//        $profil_Recheche_exist = $profil_Recheche_exist[0];
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $projet->setDateCreation(new \DateTime());
            $em->flush();
            $id = $projet->getId();
            return $this->redirectToRoute('showMyProject', array(
                'id' => $id
            ));
        }
        return $this->render('@MBL/Users/editProject.html.twig',
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

	        try {
		        $em = $this->getDoctrine()->getManager();

		        $projet->addProfilsrecherch($projet_profil);
		        $projet_profil->addProjet($projet);
		        $em->persist($projet_profil);
		        $em->flush();

		        $projet_profilId = $projet_profil->getId();
		        $projet_profilTemp =  $em->getRepository('MBLBundle:ProfilRecherche')->myfindByProfilRecherche($projet_profilId, $locale);
		        $response = $this->renderView('@MBL/Users/profilsRechercheTemplate.html.twig', array(
			        'profil' => $projet_profilTemp[0]
		        ));
	        }
	        catch (\Doctrine\DBAL\DBALException $e)
	        {
	        	$response = array('msg' => $e->getMessage());
	        }

            $response = new JsonResponse($response);

            return $response;

        }

        return $this->render('@MBL/Users/createProjetAddProfil.html.twig',
            array('form_pro' => $form_pro->createView(),
                'projet' => $projet,
                'locale' => $locale,
                'profil_Recheche_exist' => $profil_Recheche_exist,

            ));
    }

    public function editProfilRechercheProjectAction(Request $request, ProfilRecherche $profilRecherche)
    {

        $em = $this->getDoctrine()->getManager();
        $locale = $request->getLocale();
        $projet = $profilRecherche->getProjets()[0];

        $form_pro = $this->createForm('MBLBundle\Form\ProfilRechercheType', $profilRecherche, array(
            'locale' => $locale
        ));
        $form_pro->handleRequest($request);

        if ($form_pro->isValid()&&$form_pro->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();

            $em->flush();

            return $this->redirectToRoute('editProjet', array('id'=>$projet->getId()));
        }

        return $this->render('@MBL/Users/editProjetAddProfil.html.twig',

            array('form_pro' => $form_pro->createView(),
                'projet' => $projet,
                'locale' => $locale


            ));
    }
    public function deleteProfilRechercheAction(Request $request, ProfilRecherche $profilRecherche)
    {
        $em = $this->getDoctrine()->getManager();
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

    public function showProjectAction(Request $request, $page)
    {
//        dump($request); die();

        $locale= $request->getLocale();

        $em = $this->getDoctrine()->getManager();

        $form_secteur = $this->createForm('MBLBundle\Form\ProjetRechercheType', null, array('locale'=>$locale));

        if ( $page >= 1)
        {
            $projects = $em->getRepository('MBLBundle:Projet')->findAllDesc($locale, 12, $page);
            $nbProjects =  $em->getRepository('MBLBundle:Projet')->countProjects($locale);
        }
        else
        {
            $projects = $em->getRepository('MBLBundle:Projet')->findAllDesc($locale, 12, 1);
            $nbProjects =  $em->getRepository('MBLBundle:Projet')->countProjects($locale);
        }

        if ($request->isMethod('POST'))
        {
            $idSec = $request->request->get('mblbundle_projet')['secteur'];
            $idTyp = $request->request->get('mblbundle_projet')['typeDeProjet'];
            $Loc = $request->request->get('mblbundle_projet')['localisation']['localisation'];
            if (is_null($page))
            {
                $page = 1;
            }
            $projects = $em->getRepository('MBLBundle:Projet')->myfindProjetByVDeux($idSec, 12, $page, $idTyp, $Loc, $locale);
            $nbProjects = count($projects);
        }
        return $this->render('@MBL/Users/showProject.html.twig', array(

            'projects'=> $projects,
            'form_secteur' =>$form_secteur->createView(),
            'locale' => $locale,
            'nombrePage' => ceil($nbProjects/12),
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
        $profils = $em->getRepository('MBLBundle:Profil')->myfindProfilById($prof, $locale);
        $profils = $profils[0];

        $profilexist = $em->getRepository('MBLBundle:ProfilRecherche')->myfindByProjet($projet, $locale);

        return $this->render('@MBL/Users/showOneProject.html.twig', array(
            'projet' => $pro,
            'profil' => $profils,
            'profil_recherche_exist' => $profilexist,
        ));
    }

    /**
     * @param Projet|null $projet
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteMyProjectAction(Projet $projet = null, Request $request)
    {
        if ($projet != null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($projet);
            $em->flush();
            if($request->getLocale() == "it")
            {
                $this->get('session')->getFlashBag()->add('notice', 'Il progetto è stato rimosso');
            }
            else
            {
                $this->get('session')->getFlashBag()->add('notice', 'Le projet a bien été supprimé');
            }

            return $this->redirectToRoute('showMyProject');
        }

        else {
            if($request->getLocale() == "it")
            {
                $this->get('session')->getFlashBag()->add('notice', 'Il progetto desiderato non esiste');
            }
            else
            {
                $this->get('session')->getFlashBag()->add('notice', 'Le projet recherché n\'existe pas');
            }
            return $this->redirectToRoute('showMyProject');
        }
    }
//Dans la section Chat lorsque l'on ajoute un msg
    public function chatIndexAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $currentUser = $this->getUser();
        $session = $request->getSession();
        $session->clear();
        $currentUserPrenom = $currentUser->getPrenom();
        //Nouveau text
        $text = new Text();
        // Le chat correspondant à la discussion selectionnée
        $chat = $em->getRepository('MBLBundle:Chat')->findOneById($id);
        $text_content = $em->getRepository('MBLBundle:Text')->myfindOneByChatId($id);
        $msgs = $em->getRepository('MBLBundle:Text')->myFindOneByChatIdViewer($id, $currentUserPrenom);

        if(!empty($msgs))
        {
            foreach ( $msgs as $item) {
                if ($item->getSeen() == 1)
                {

                }
                else
                {
                    $item->setSeen(1);
                    $em->persist($item);
                    $em->flush();
                }

            }
        }
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
//        dump($chatexist);die();
        if(!empty($chatexist))
        {
            // Si oui il existe déjà on envoi un message à l'utilisateur qu'il ne peut se connecter
            if($request->getLocale() == "it")
            {
                $this->get('session')->getFlashBag()->add('error', 'Si è già connessi con questa persona');

            }
            else
            {
                $this->get('session')->getFlashBag()->add('error', 'Vous etes déjà connecté avec cette personne');

            }
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
        if($request->getLocale() == "it")
        {
            $this->get('session')->getFlashBag()->add('error', 'La richiesta di accesso è stato inviato');
        }
        else
        {
            $this->get('session')->getFlashBag()->add('error', 'Votre demande de connexion a été envoyée');
        }
        return $this->redirectToRoute('showAllProfils');
    }

    public function connectAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $currentUser = $this->getUser();
        $countViews = 0;
        $countViews = $em->getRepository('MBLBundle:Text')->myFindCountViews($currentUser);

        // on fait la vérification de savoir si il y a un chat selectionné
        if(is_numeric($id))
        {
            //si oui on set le chat pour qu'il soit opérationnel
            $connectId =$this->getUser()->getId();
            $chat = $em->getRepository('MBLBundle:Chat')->findOneById($id);
            $chat->setConnectionbyid($connectId);
            $em->flush();
        }

        //Envoie de mes chats par rapport aux profils de l'utilisateur qui consulte le site
        $chats = $em->getRepository('MBLBundle:Chat')->myfindByProfil($currentUser);
        return $this->render('@MBL/Users/connection.html.twig', array(
            'chats' => $chats,
            'countV' => $countViews

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
