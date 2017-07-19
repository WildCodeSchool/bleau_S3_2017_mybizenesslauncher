<?php

namespace MBLBundle\Entity;

/**
 * ETQ
 */
class ETQ
{
    public function __toString()
    {
       return  $this->etqit;
    }


    /* GENERATED CODE */

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $etqfr;

    /**
     * @var string
     */
    private $etqit;

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
     * Set etqfr
     *
     * @param string $etqfr
     *
     * @return ETQ
     */
    public function setEtqfr($etqfr)
    {
        $this->etqfr = $etqfr;

        return $this;
    }

    /**
     * Get etqfr
     *
     * @return string
     */
    public function getEtqfr()
    {
        return $this->etqfr;
    }

    /**
     * Set etqit
     *
     * @param string $etqit
     *
     * @return ETQ
     */
    public function setEtqit($etqit)
    {
        $this->etqit = $etqit;

        return $this;
    }

    /**
     * Get etqit
     *
     * @return string
     */
    public function getEtqit()
    {
        return $this->etqit;
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
