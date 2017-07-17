<?php

namespace MBLBundle\Entity;

/**
 * Competences
 */
class Competences
{
    public function __toString(){
        return $this->competencesit;
    }

    /* CODE GENERATED */


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $competencesfr;

    /**
     * @var string
     */
    private $competencesit;

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
     * Set competencesfr
     *
     * @param string $competencesfr
     *
     * @return Competences
     */
    public function setCompetencesfr($competencesfr)
    {
        $this->competencesfr = $competencesfr;

        return $this;
    }

    /**
     * Get competencesfr
     *
     * @return string
     */
    public function getCompetencesfr()
    {
        return $this->competencesfr;
    }

    /**
     * Set competencesit
     *
     * @param string $competencesit
     *
     * @return Competences
     */
    public function setCompetencesit($competencesit)
    {
        $this->competencesit = $competencesit;

        return $this;
    }

    /**
     * Get competencesit
     *
     * @return string
     */
    public function getCompetencesit()
    {
        return $this->competencesit;
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
