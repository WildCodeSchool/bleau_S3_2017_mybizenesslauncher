<?php

namespace MBLBundle\Entity;

/**
 * Dispo
 */
class Dispo
{



    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $dispofr;

    /**
     * @var string
     */
    private $dispoit;

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
     * Set dispofr
     *
     * @param string $dispofr
     *
     * @return Dispo
     */
    public function setDispofr($dispofr)
    {
        $this->dispofr = $dispofr;

        return $this;
    }

    /**
     * Get dispofr
     *
     * @return string
     */
    public function getDispofr()
    {
        return $this->dispofr;
    }

    /**
     * Set dispoit
     *
     * @param string $dispoit
     *
     * @return Dispo
     */
    public function setDispoit($dispoit)
    {
        $this->dispoit = $dispoit;

        return $this;
    }

    /**
     * Get dispoit
     *
     * @return string
     */
    public function getDispoit()
    {
        return $this->dispoit;
    }

    /**
     * Add profil
     *
     * @param \MBLBundle\Entity\Profil $profil
     *
     * @return Dispo
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
     * @return Dispo
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
