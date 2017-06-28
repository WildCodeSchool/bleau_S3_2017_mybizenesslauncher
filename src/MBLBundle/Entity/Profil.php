<?php

namespace MBLBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
/**
 * Profil
 */
class Profil extends BaseUser
{
    protected $id;

    public function setEmail($email)
    {
        $email =is_null($email) ? '' : $email;
        parent::setEmail($email);
        $this->setUsername($email);
        return $this;
    }

    // Generated code



    /**
     * @var string
     */
    private $nom_fr;

    /**
     * @var string
     */
    private $nom_it;

    /**
     * @var string
     */
    private $prenom_fr;

    /**
     * @var string
     */
    private $prenom_it;

    /**
     * @var string
     */
    private $description_fr;

    /**
     * @var string
     */
    private $description_it;

    /**
     * @var string
     */
    private $linkedIn_fr;

    /**
     * @var string
     */
    private $linkedIn_it;

    /**
     * @var string
     */
    private $localisation_fr;

    /**
     * @var string
     */
    private $localisation_it;

    /**
     * @var \MBLBundle\Entity\Invest
     */
    private $invest;

    /**
     * @var \MBLBundle\Entity\Fichier
     */
    private $fichier;

    /**
     * @var \MBLBundle\Entity\ETQ
     */
    private $etq;

    /**
     * @var \MBLBundle\Entity\Dispo
     */
    private $dispo;

    /**
     * @var \MBLBundle\Entity\Ou
     */
    private $ou;

    /**
     * @var \MBLBundle\Entity\Metier
     */
    private $metier;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $competences;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $projets;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $chats;


    /**
     * Set nomFr
     *
     * @param string $nomFr
     *
     * @return Profil
     */
    public function setNomFr($nomFr)
    {
        $this->nom_fr = $nomFr;

        return $this;
    }

    /**
     * Get nomFr
     *
     * @return string
     */
    public function getNomFr()
    {
        return $this->nom_fr;
    }

    /**
     * Set nomIt
     *
     * @param string $nomIt
     *
     * @return Profil
     */
    public function setNomIt($nomIt)
    {
        $this->nom_it = $nomIt;

        return $this;
    }

    /**
     * Get nomIt
     *
     * @return string
     */
    public function getNomIt()
    {
        return $this->nom_it;
    }

    /**
     * Set prenomFr
     *
     * @param string $prenomFr
     *
     * @return Profil
     */
    public function setPrenomFr($prenomFr)
    {
        $this->prenom_fr = $prenomFr;

        return $this;
    }

    /**
     * Get prenomFr
     *
     * @return string
     */
    public function getPrenomFr()
    {
        return $this->prenom_fr;
    }

    /**
     * Set prenomIt
     *
     * @param string $prenomIt
     *
     * @return Profil
     */
    public function setPrenomIt($prenomIt)
    {
        $this->prenom_it = $prenomIt;

        return $this;
    }

    /**
     * Get prenomIt
     *
     * @return string
     */
    public function getPrenomIt()
    {
        return $this->prenom_it;
    }

    /**
     * Set descriptionFr
     *
     * @param string $descriptionFr
     *
     * @return Profil
     */
    public function setDescriptionFr($descriptionFr)
    {
        $this->description_fr = $descriptionFr;

        return $this;
    }

    /**
     * Get descriptionFr
     *
     * @return string
     */
    public function getDescriptionFr()
    {
        return $this->description_fr;
    }

    /**
     * Set descriptionIt
     *
     * @param string $descriptionIt
     *
     * @return Profil
     */
    public function setDescriptionIt($descriptionIt)
    {
        $this->description_it = $descriptionIt;

        return $this;
    }

    /**
     * Get descriptionIt
     *
     * @return string
     */
    public function getDescriptionIt()
    {
        return $this->description_it;
    }

    /**
     * Set linkedInFr
     *
     * @param string $linkedInFr
     *
     * @return Profil
     */
    public function setLinkedInFr($linkedInFr)
    {
        $this->linkedIn_fr = $linkedInFr;

        return $this;
    }

    /**
     * Get linkedInFr
     *
     * @return string
     */
    public function getLinkedInFr()
    {
        return $this->linkedIn_fr;
    }

    /**
     * Set linkedInIt
     *
     * @param string $linkedInIt
     *
     * @return Profil
     */
    public function setLinkedInIt($linkedInIt)
    {
        $this->linkedIn_it = $linkedInIt;

        return $this;
    }

    /**
     * Get linkedInIt
     *
     * @return string
     */
    public function getLinkedInIt()
    {
        return $this->linkedIn_it;
    }

    /**
     * Set localisationFr
     *
     * @param string $localisationFr
     *
     * @return Profil
     */
    public function setLocalisationFr($localisationFr)
    {
        $this->localisation_fr = $localisationFr;

        return $this;
    }

    /**
     * Get localisationFr
     *
     * @return string
     */
    public function getLocalisationFr()
    {
        return $this->localisation_fr;
    }

    /**
     * Set localisationIt
     *
     * @param string $localisationIt
     *
     * @return Profil
     */
    public function setLocalisationIt($localisationIt)
    {
        $this->localisation_it = $localisationIt;

        return $this;
    }

    /**
     * Get localisationIt
     *
     * @return string
     */
    public function getLocalisationIt()
    {
        return $this->localisation_it;
    }

    /**
     * Set invest
     *
     * @param \MBLBundle\Entity\Invest $invest
     *
     * @return Profil
     */
    public function setInvest(\MBLBundle\Entity\Invest $invest = null)
    {
        $this->invest = $invest;

        return $this;
    }

    /**
     * Get invest
     *
     * @return \MBLBundle\Entity\Invest
     */
    public function getInvest()
    {
        return $this->invest;
    }

    /**
     * Set fichier
     *
     * @param \MBLBundle\Entity\Fichier $fichier
     *
     * @return Profil
     */
    public function setFichier(\MBLBundle\Entity\Fichier $fichier = null)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return \MBLBundle\Entity\Fichier
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Set etq
     *
     * @param \MBLBundle\Entity\ETQ $etq
     *
     * @return Profil
     */
    public function setEtq(\MBLBundle\Entity\ETQ $etq = null)
    {
        $this->etq = $etq;

        return $this;
    }

    /**
     * Get etq
     *
     * @return \MBLBundle\Entity\ETQ
     */
    public function getEtq()
    {
        return $this->etq;
    }

    /**
     * Set dispo
     *
     * @param \MBLBundle\Entity\Dispo $dispo
     *
     * @return Profil
     */
    public function setDispo(\MBLBundle\Entity\Dispo $dispo = null)
    {
        $this->dispo = $dispo;

        return $this;
    }

    /**
     * Get dispo
     *
     * @return \MBLBundle\Entity\Dispo
     */
    public function getDispo()
    {
        return $this->dispo;
    }

    /**
     * Set ou
     *
     * @param \MBLBundle\Entity\Ou $ou
     *
     * @return Profil
     */
    public function setOu(\MBLBundle\Entity\Ou $ou = null)
    {
        $this->ou = $ou;

        return $this;
    }

    /**
     * Get ou
     *
     * @return \MBLBundle\Entity\Ou
     */
    public function getOu()
    {
        return $this->ou;
    }

    /**
     * Set metier
     *
     * @param \MBLBundle\Entity\Metier $metier
     *
     * @return Profil
     */
    public function setMetier(\MBLBundle\Entity\Metier $metier = null)
    {
        $this->metier = $metier;

        return $this;
    }

    /**
     * Get metier
     *
     * @return \MBLBundle\Entity\Metier
     */
    public function getMetier()
    {
        return $this->metier;
    }

    /**
     * Add competence
     *
     * @param \MBLBundle\Entity\Competences $competence
     *
     * @return Profil
     */
    public function addCompetence(\MBLBundle\Entity\Competences $competence)
    {
        $this->competences[] = $competence;

        return $this;
    }

    /**
     * Remove competence
     *
     * @param \MBLBundle\Entity\Competences $competence
     */
    public function removeCompetence(\MBLBundle\Entity\Competences $competence)
    {
        $this->competences->removeElement($competence);
    }

    /**
     * Get competences
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompetences()
    {
        return $this->competences;
    }

    /**
     * Add projet
     *
     * @param \MBLBundle\Entity\Projet $projet
     *
     * @return Profil
     */
    public function addProjet(\MBLBundle\Entity\Projet $projet)
    {
        $this->projets[] = $projet;

        return $this;
    }

    /**
     * Remove projet
     *
     * @param \MBLBundle\Entity\Projet $projet
     */
    public function removeProjet(\MBLBundle\Entity\Projet $projet)
    {
        $this->projets->removeElement($projet);
    }

    /**
     * Get projets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjets()
    {
        return $this->projets;
    }

    /**
     * Add chat
     *
     * @param \MBLBundle\Entity\Chat $chat
     *
     * @return Profil
     */
    public function addChat(\MBLBundle\Entity\Chat $chat)
    {
        $this->chats[] = $chat;

        return $this;
    }

    /**
     * Remove chat
     *
     * @param \MBLBundle\Entity\Chat $chat
     */
    public function removeChat(\MBLBundle\Entity\Chat $chat)
    {
        $this->chats->removeElement($chat);
    }

    /**
     * Get chats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChats()
    {
        return $this->chats;
    }
}
