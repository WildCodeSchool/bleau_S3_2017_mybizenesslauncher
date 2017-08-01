<?php

namespace MBLBundle\Entity;

/**
 * Projet
 */
class Projet
{

	public function __toString()
	{
		return $this->titreit;
	}

	// Generated code

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titrefr;

    /**
     * @var string
     */
    private $titreit;

    /**
     * @var string
     */
    private $descriptionfr;

    /**
     * @var string
     */
    private $descriptionit;

    /**
     * @var string
     */
    private $siteInternetfr;

    /**
     * @var string
     */
    private $siteInternetit;

    /**
     * @var string
     */
    private $ebustaUrlfr;

    /**
     * @var string
     */
    private $ebustaUrlit;

    /**
     * @var string
     */
    private $localisation;

    /**
     * @var \DateTime
     */
    private $dateCreation;

    /**
     * @var string
     */
    private $ville;

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
     * Set titrefr
     *
     * @param string $titrefr
     *
     * @return Projet
     */
    public function setTitrefr($titrefr)
    {
        $this->titrefr = $titrefr;

        return $this;
    }

    /**
     * Get titrefr
     *
     * @return string
     */
    public function getTitrefr()
    {
        return $this->titrefr;
    }

    /**
     * Set titreit
     *
     * @param string $titreit
     *
     * @return Projet
     */
    public function setTitreit($titreit)
    {
        $this->titreit = $titreit;

        return $this;
    }

    /**
     * Get titreit
     *
     * @return string
     */
    public function getTitreit()
    {
        return $this->titreit;
    }

    /**
     * Set descriptionfr
     *
     * @param string $descriptionfr
     *
     * @return Projet
     */
    public function setDescriptionfr($descriptionfr)
    {
        $this->descriptionfr = $descriptionfr;

        return $this;
    }

    /**
     * Get descriptionfr
     *
     * @return string
     */
    public function getDescriptionfr()
    {
        return $this->descriptionfr;
    }

    /**
     * Set descriptionit
     *
     * @param string $descriptionit
     *
     * @return Projet
     */
    public function setDescriptionit($descriptionit)
    {
        $this->descriptionit = $descriptionit;

        return $this;
    }

    /**
     * Get descriptionit
     *
     * @return string
     */
    public function getDescriptionit()
    {
        return $this->descriptionit;
    }

    /**
     * Set siteInternetfr
     *
     * @param string $siteInternetfr
     *
     * @return Projet
     */
    public function setSiteInternetfr($siteInternetfr)
    {
        $this->siteInternetfr = $siteInternetfr;

        return $this;
    }

    /**
     * Get siteInternetfr
     *
     * @return string
     */
    public function getSiteInternetfr()
    {
        return $this->siteInternetfr;
    }

    /**
     * Set siteInternetit
     *
     * @param string $siteInternetit
     *
     * @return Projet
     */
    public function setSiteInternetit($siteInternetit)
    {
        $this->siteInternetit = $siteInternetit;

        return $this;
    }

    /**
     * Get siteInternetit
     *
     * @return string
     */
    public function getSiteInternetit()
    {
        return $this->siteInternetit;
    }

    /**
     * Set ebustaUrlfr
     *
     * @param string $ebustaUrlfr
     *
     * @return Projet
     */
    public function setEbustaUrlfr($ebustaUrlfr)
    {
        $this->ebustaUrlfr = $ebustaUrlfr;

        return $this;
    }

    /**
     * Get ebustaUrlfr
     *
     * @return string
     */
    public function getEbustaUrlfr()
    {
        return $this->ebustaUrlfr;
    }

    /**
     * Set ebustaUrlit
     *
     * @param string $ebustaUrlit
     *
     * @return Projet
     */
    public function setEbustaUrlit($ebustaUrlit)
    {
        $this->ebustaUrlit = $ebustaUrlit;

        return $this;
    }

    /**
     * Get ebustaUrlit
     *
     * @return string
     */
    public function getEbustaUrlit()
    {
        return $this->ebustaUrlit;
    }

    /**
     * Set localisation
     *
     * @param string $localisation
     *
     * @return Projet
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return string
     */
    public function getLocalisation()
    {
        return $this->localisation;
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
     * Set ville
     *
     * @param string $ville
     *
     * @return Projet
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
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
    /**
     * @var string
     */
    private $lngp;


    /**
     * Set lngp
     *
     * @param string $lngp
     *
     * @return Projet
     */
    public function setLngp($lngp)
    {
        $this->lngp = $lngp;

        return $this;
    }

    /**
     * Get lngp
     *
     * @return string
     */
    public function getLngp()
    {
        return $this->lngp;
    }
}
