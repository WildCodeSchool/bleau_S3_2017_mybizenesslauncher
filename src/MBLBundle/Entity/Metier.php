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
    private $metier;

    /**
     * @var \MBLBundle\Entity\ProfilRecherche
     */
    private $profilrecherche;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $profils;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set metier
     *
     * @param string $metier
     *
     * @return Metier
     */
    public function setMetier($metier)
    {
        $this->metier = $metier;

        return $this;
    }

    /**
     * Get metier
     *
     * @return string
     */
    public function getMetier()
    {
        return $this->metier;
    }

    /**
     * Set profilrecherche
     *
     * @param \MBLBundle\Entity\ProfilRecherche $profilrecherche
     *
     * @return Metier
     */
    public function setProfilrecherche(\MBLBundle\Entity\ProfilRecherche $profilrecherche = null)
    {
        $this->profilrecherche = $profilrecherche;

        return $this;
    }

    /**
     * Get profilrecherche
     *
     * @return \MBLBundle\Entity\ProfilRecherche
     */
    public function getProfilrecherche()
    {
        return $this->profilrecherche;
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
}
