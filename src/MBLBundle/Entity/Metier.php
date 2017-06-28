<?php

namespace MBLBundle\Entity;

/**
 * Metier
 */
class Metier
{



    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $metier_fr;

    /**
     * @var string
     */
    private $metier_it;

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
     * Set metierFr
     *
     * @param string $metierFr
     *
     * @return Metier
     */
    public function setMetierFr($metierFr)
    {
        $this->metier_fr = $metierFr;

        return $this;
    }

    /**
     * Get metierFr
     *
     * @return string
     */
    public function getMetierFr()
    {
        return $this->metier_fr;
    }

    /**
     * Set metierIt
     *
     * @param string $metierIt
     *
     * @return Metier
     */
    public function setMetierIt($metierIt)
    {
        $this->metier_it = $metierIt;

        return $this;
    }

    /**
     * Get metierIt
     *
     * @return string
     */
    public function getMetierIt()
    {
        return $this->metier_it;
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
