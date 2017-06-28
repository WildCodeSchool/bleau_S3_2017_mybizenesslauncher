<?php

namespace MBLBundle\Entity;

/**
 * ETQ
 */
class ETQ
{


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $etq_fr;

    /**
     * @var string
     */
    private $etq_it;

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
     * Set etqFr
     *
     * @param string $etqFr
     *
     * @return ETQ
     */
    public function setEtqFr($etqFr)
    {
        $this->etq_fr = $etqFr;

        return $this;
    }

    /**
     * Get etqFr
     *
     * @return string
     */
    public function getEtqFr()
    {
        return $this->etq_fr;
    }

    /**
     * Set etqIt
     *
     * @param string $etqIt
     *
     * @return ETQ
     */
    public function setEtqIt($etqIt)
    {
        $this->etq_it = $etqIt;

        return $this;
    }

    /**
     * Get etqIt
     *
     * @return string
     */
    public function getEtqIt()
    {
        return $this->etq_it;
    }

    /**
     * Add profil
     *
     * @param \MBLBundle\Entity\Profil $profil
     *
     * @return ETQ
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
     * @return ETQ
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
