<?php

namespace MBLBundle\Entity;

/**
 * Metier
 */
class Metier
{
    public function __toString(){
        return $this->metierit;
    }

    /* CODE GENERATED */


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $metierfr;

    /**
     * @var string
     */
    private $metierit;

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
     * Set metierfr
     *
     * @param string $metierfr
     *
     * @return Metier
     */
    public function setMetierfr($metierfr)
    {
        $this->metierfr = $metierfr;

        return $this;
    }

    /**
     * Get metierfr
     *
     * @return string
     */
    public function getMetierfr()
    {
        return $this->metierfr;
    }

    /**
     * Set metierit
     *
     * @param string $metierit
     *
     * @return Metier
     */
    public function setMetierit($metierit)
    {
        $this->metierit = $metierit;

        return $this;
    }

    /**
     * Get metierit
     *
     * @return string
     */
    public function getMetierit()
    {
        return $this->metierit;
    }

    /**
     * Add profil
     *
     * @param \MBLBundle\Entity\Profil $profil
     *
     * @return Metier
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
     * @return Metier
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
