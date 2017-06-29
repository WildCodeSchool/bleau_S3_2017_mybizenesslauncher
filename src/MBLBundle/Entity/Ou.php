<?php

namespace MBLBundle\Entity;

/**
 * Ou
 */
class Ou
{



    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $oufr;

    /**
     * @var string
     */
    private $ouit;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $profils;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $profilrecherches;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->profils = new \Doctrine\Common\Collections\ArrayCollection();
        $this->profilrecherches = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set oufr
     *
     * @param string $oufr
     *
     * @return Ou
     */
    public function setOufr($oufr)
    {
        $this->oufr = $oufr;

        return $this;
    }

    /**
     * Get oufr
     *
     * @return string
     */
    public function getOufr()
    {
        return $this->oufr;
    }

    /**
     * Set ouit
     *
     * @param string $ouit
     *
     * @return Ou
     */
    public function setOuit($ouit)
    {
        $this->ouit = $ouit;

        return $this;
    }

    /**
     * Get ouit
     *
     * @return string
     */
    public function getOuit()
    {
        return $this->ouit;
    }

    /**
     * Add profil
     *
     * @param \MBLBundle\Entity\Profil $profil
     *
     * @return Ou
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
     * Add profilrecherch
     *
     * @param \MBLBundle\Entity\ProfilRecherche $profilrecherch
     *
     * @return Ou
     */
    public function addProfilrecherch(\MBLBundle\Entity\ProfilRecherche $profilrecherch)
    {
        $this->profilrecherches[] = $profilrecherch;

        return $this;
    }

    /**
     * Remove profilrecherch
     *
     * @param \MBLBundle\Entity\ProfilRecherche $profilrecherch
     */
    public function removeProfilrecherch(\MBLBundle\Entity\ProfilRecherche $profilrecherch)
    {
        $this->profilrecherches->removeElement($profilrecherch);
    }

    /**
     * Get profilrecherches
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfilrecherches()
    {
        return $this->profilrecherches;
    }
}
