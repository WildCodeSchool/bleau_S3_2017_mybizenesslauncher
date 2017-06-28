<?php

namespace MBLBundle\Entity;

/**
 * Competences
 */
class Competences
{


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $competences_fr;

    /**
     * @var string
     */
    private $competences_it;

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
     * Set competencesFr
     *
     * @param string $competencesFr
     *
     * @return Competences
     */
    public function setCompetencesFr($competencesFr)
    {
        $this->competences_fr = $competencesFr;

        return $this;
    }

    /**
     * Get competencesFr
     *
     * @return string
     */
    public function getCompetencesFr()
    {
        return $this->competences_fr;
    }

    /**
     * Set competencesIt
     *
     * @param string $competencesIt
     *
     * @return Competences
     */
    public function setCompetencesIt($competencesIt)
    {
        $this->competences_it = $competencesIt;

        return $this;
    }

    /**
     * Get competencesIt
     *
     * @return string
     */
    public function getCompetencesIt()
    {
        return $this->competences_it;
    }

    /**
     * Add profilsrecherch
     *
     * @param \MBLBundle\Entity\ProfilRecherche $profilsrecherch
     *
     * @return Competences
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
     * @return Competences
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
