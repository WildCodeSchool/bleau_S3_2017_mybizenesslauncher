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
    private $dispo_fr;

    /**
     * @var string
     */
    private $dispo_it;

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
     * Set dispoFr
     *
     * @param string $dispoFr
     *
     * @return Dispo
     */
    public function setDispoFr($dispoFr)
    {
        $this->dispo_fr = $dispoFr;

        return $this;
    }

    /**
     * Get dispoFr
     *
     * @return string
     */
    public function getDispoFr()
    {
        return $this->dispo_fr;
    }

    /**
     * Set dispoIt
     *
     * @param string $dispoIt
     *
     * @return Dispo
     */
    public function setDispoIt($dispoIt)
    {
        $this->dispo_it = $dispoIt;

        return $this;
    }

    /**
     * Get dispoIt
     *
     * @return string
     */
    public function getDispoIt()
    {
        return $this->dispo_it;
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
