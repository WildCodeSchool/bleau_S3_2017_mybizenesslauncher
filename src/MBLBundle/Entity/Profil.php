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
    private $nomFr;

    /**
     * @var string
     */
    private $nomIt;

    /**
     * @var string
     */
    private $prenomFr;

    /**
     * @var string
     */
    private $prenomIt;

    /**
     * @var string
     */
    private $descriptionFr;

    /**
     * @var string
     */
    private $descriptionIt;

    /**
     * @var string
     */
    private $linkedInFr;

    /**
     * @var string
     */
    private $linkedInIt;

    /**
     * @var string
     */
    private $localisationFr;

    /**
     * @var string
     */
    private $localisationIt;

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
        $this->nomFr = $nomFr;

        return $this;
    }

    /**
     * Get nomFr
     *
     * @return string
     */
    public function getNomFr()
    {
        return $this->nomFr;
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
        $this->nomIt = $nomIt;

        return $this;
    }

    /**
     * Get nomIt
     *
     * @return string
     */
    public function getNomIt()
    {
        return $this->nomIt;
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
        $this->prenomFr = $prenomFr;

        return $this;
    }

    /**
     * Get prenomFr
     *
     * @return string
     */
    public function getPrenomFr()
    {
        return $this->prenomFr;
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
        $this->prenomIt = $prenomIt;

        return $this;
    }

    /**
     * Get prenomIt
     *
     * @return string
     */
    public function getPrenomIt()
    {
        return $this->prenomIt;
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
        $this->descriptionFr = $descriptionFr;

        return $this;
    }

    /**
     * Get descriptionFr
     *
     * @return string
     */
    public function getDescriptionFr()
    {
        return $this->descriptionFr;
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
        $this->descriptionIt = $descriptionIt;

        return $this;
    }

    /**
     * Get descriptionIt
     *
     * @return string
     */
    public function getDescriptionIt()
    {
        return $this->descriptionIt;
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
        $this->linkedInFr = $linkedInFr;

        return $this;
    }

    /**
     * Get linkedInFr
     *
     * @return string
     */
    public function getLinkedInFr()
    {
        return $this->linkedInFr;
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
        $this->linkedInIt = $linkedInIt;

        return $this;
    }

    /**
     * Get linkedInIt
     *
     * @return string
     */
    public function getLinkedInIt()
    {
        return $this->linkedInIt;
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
        $this->localisationFr = $localisationFr;

        return $this;
    }

    /**
     * Get localisationFr
     *
     * @return string
     */
    public function getLocalisationFr()
    {
        return $this->localisationFr;
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
        $this->localisationIt = $localisationIt;

        return $this;
    }

    /**
     * Get localisationIt
     *
     * @return string
     */
    public function getLocalisationIt()
    {
        return $this->localisationIt;
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
