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
    private $etq;

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
     * Set etq
     *
     * @param string $etq
     *
     * @return ETQ
     */
    public function setEtq($etq)
    {
        $this->etq = $etq;

        return $this;
    }

    /**
     * Get etq
     *
     * @return string
     */
    public function getEtq()
    {
        return $this->etq;
    }

    /**
     * Set profilrecherche
     *
     * @param \MBLBundle\Entity\ProfilRecherche $profilrecherche
     *
     * @return ETQ
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
}
