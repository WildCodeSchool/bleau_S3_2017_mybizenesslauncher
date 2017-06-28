<?php

namespace MBLBundle\Entity;

/**
 * Projet
 */
class Projet
{



    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titreFr;

    /**
     * @var string
     */
    private $titreIt;

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
    private $siteInternet_fr;

    /**
     * @var string
     */
    private $siteInternet_it;

    /**
     * @var string
     */
    private $ebustaUrl_fr;

    /**
     * @var string
     */
    private $ebustaUrl_it;

    /**
     * @var string
     */
    private $localisation_fr;

    /**
     * @var string
     */
    private $localisation_it;

    /**
     * @var \DateTime
     */
    private $dateCreation;

    /**
     * @var \MBLBundle\Entity\Secteur
     */
    private $secteur;

    /**
     * @var \MBLBundle\Entity\Fichier
     */
    private $fichier;

    /**
     * @var \MBLBundle\Entity\TypeDeProjet
     */
    private $typeDeProjet;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $profilsrecherches;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $profils;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->profilsrecherches = new \Doctrine\Common\Collections\ArrayCollection();
        $this->profils = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titreFr
     *
     * @param string $titreFr
     *
     * @return Projet
     */
    public function setTitreFr($titreFr)
    {
        $this->titreFr = $titreFr;

        return $this;
    }

    /**
     * Get titreFr
     *
     * @return string
     */
    public function getTitreFr()
    {
        return $this->titreFr;
    }

    /**
     * Set titreIt
     *
     * @param string $titreIt
     *
     * @return Projet
     */
    public function setTitreIt($titreIt)
    {
        $this->titreIt = $titreIt;

        return $this;
    }

    /**
     * Get titreIt
     *
     * @return string
     */
    public function getTitreIt()
    {
        return $this->titreIt;
    }

    /**
     * Set descriptionFr
     *
     * @param string $descriptionFr
     *
     * @return Projet
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
     * @return Projet
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
     * Set siteInternetFr
     *
     * @param string $siteInternetFr
     *
     * @return Projet
     */
    public function setSiteInternetFr($siteInternetFr)
    {
        $this->siteInternet_fr = $siteInternetFr;

        return $this;
    }

    /**
     * Get siteInternetFr
     *
     * @return string
     */
    public function getSiteInternetFr()
    {
        return $this->siteInternet_fr;
    }

    /**
     * Set siteInternetIt
     *
     * @param string $siteInternetIt
     *
     * @return Projet
     */
    public function setSiteInternetIt($siteInternetIt)
    {
        $this->siteInternet_it = $siteInternetIt;

        return $this;
    }

    /**
     * Get siteInternetIt
     *
     * @return string
     */
    public function getSiteInternetIt()
    {
        return $this->siteInternet_it;
    }

    /**
     * Set ebustaUrlFr
     *
     * @param string $ebustaUrlFr
     *
     * @return Projet
     */
    public function setEbustaUrlFr($ebustaUrlFr)
    {
        $this->ebustaUrl_fr = $ebustaUrlFr;

        return $this;
    }

    /**
     * Get ebustaUrlFr
     *
     * @return string
     */
    public function getEbustaUrlFr()
    {
        return $this->ebustaUrl_fr;
    }

    /**
     * Set ebustaUrlIt
     *
     * @param string $ebustaUrlIt
     *
     * @return Projet
     */
    public function setEbustaUrlIt($ebustaUrlIt)
    {
        $this->ebustaUrl_it = $ebustaUrlIt;

        return $this;
    }

    /**
     * Get ebustaUrlIt
     *
     * @return string
     */
    public function getEbustaUrlIt()
    {
        return $this->ebustaUrl_it;
    }

    /**
     * Set localisationFr
     *
     * @param string $localisationFr
     *
     * @return Projet
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
     * @return Projet
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Projet
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set secteur
     *
     * @param \MBLBundle\Entity\Secteur $secteur
     *
     * @return Projet
     */
    public function setSecteur(\MBLBundle\Entity\Secteur $secteur = null)
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get secteur
     *
     * @return \MBLBundle\Entity\Secteur
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * Set fichier
     *
     * @param \MBLBundle\Entity\Fichier $fichier
     *
     * @return Projet
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
     * Set typeDeProjet
     *
     * @param \MBLBundle\Entity\TypeDeProjet $typeDeProjet
     *
     * @return Projet
     */
    public function setTypeDeProjet(\MBLBundle\Entity\TypeDeProjet $typeDeProjet = null)
    {
        $this->typeDeProjet = $typeDeProjet;

        return $this;
    }

    /**
     * Get typeDeProjet
     *
     * @return \MBLBundle\Entity\TypeDeProjet
     */
    public function getTypeDeProjet()
    {
        return $this->typeDeProjet;
    }

    /**
     * Add profilsrecherch
     *
     * @param \MBLBundle\Entity\ProfilRecherche $profilsrecherch
     *
     * @return Projet
     */
    public function addProfilsrecherch(\MBLBundle\Entity\ProfilRecherche $profilsrecherch)
    {
        $this->profilsrecherches[] = $profilsrecherch;

        return $this;
    }

    /**
     * Remove profilsrecherch
     *
     * @param \MBLBundle\Entity\ProfilRecherche $profilsrecherch
     */
    public function removeProfilsrecherch(\MBLBundle\Entity\ProfilRecherche $profilsrecherch)
    {
        $this->profilsrecherches->removeElement($profilsrecherch);
    }

    /**
     * Get profilsrecherches
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfilsrecherches()
    {
        return $this->profilsrecherches;
    }

    /**
     * Add profil
     *
     * @param \MBLBundle\Entity\Profil $profil
     *
     * @return Projet
     */
    public function addProfil(\MBLBundle\Entity\Profil $profil)
    {
        $this->profils[] = $profil;

        return $this;
    }

    /**
     * Remove profil
     *
     * @param \MBLBundle\Entity\Profil $profil
     */
    public function removeProfil(\MBLBundle\Entity\Profil $profil)
    {
        $this->profils->removeElement($profil);
    }

    /**
     * Get profils
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfils()
    {
        return $this->profils;
    }
}
