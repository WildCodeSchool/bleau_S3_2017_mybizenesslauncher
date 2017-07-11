<?php

namespace MBLBundle\Entity;

/**
 * Invest
 */
class Invest
{
    public function __toString(){
        return $this->investit;
    }

    /* CODE GENERATED */

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $investfr;

    /**
     * @var string
     */
    private $investit;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $profilrecherches;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $profils;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->profilrecherches = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set investfr
     *
     * @param string $investfr
     *
     * @return Invest
     */
    public function setInvestfr($investfr)
    {
        $this->investfr = $investfr;

        return $this;
    }

    /**
     * Get investfr
     *
     * @return string
     */
    public function getInvestfr()
    {
        return $this->investfr;
    }

    /**
     * Set investit
     *
     * @param string $investit
     *
     * @return Invest
     */
    public function setInvestit($investit)
    {
        $this->investit = $investit;

        return $this;
    }

    /**
     * Get investit
     *
     * @return string
     */
    public function getInvestit()
    {
        return $this->investit;
    }

    /**
     * Add profilrecherch
     *
     * @param \MBLBundle\Entity\ProfilRecherche $profilrecherch
     *
     * @return Invest
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

    /**
     * Add profil
     *
     * @param \MBLBundle\Entity\Profil $profil
     *
     * @return Invest
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
