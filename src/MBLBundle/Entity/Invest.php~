<?php

namespace MBLBundle\Entity;

/**
 * Invest
 */
class Invest
{


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $invest_fr;

    /**
     * @var string
     */
    private $invest_it;

    /**
     * @var \MBLBundle\Entity\Profil
     */
    private $profil;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $profilrecherches;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set investFr
     *
     * @param string $investFr
     *
     * @return Invest
     */
    public function setInvestFr($investFr)
    {
        $this->invest_fr = $investFr;

        return $this;
    }

    /**
     * Get investFr
     *
     * @return string
     */
    public function getInvestFr()
    {
        return $this->invest_fr;
    }

    /**
     * Set investIt
     *
     * @param string $investIt
     *
     * @return Invest
     */
    public function setInvestIt($investIt)
    {
        $this->invest_it = $investIt;

        return $this;
    }

    /**
     * Get investIt
     *
     * @return string
     */
    public function getInvestIt()
    {
        return $this->invest_it;
    }

    /**
     * Set profil
     *
     * @param \MBLBundle\Entity\Profil $profil
     *
     * @return Invest
     */
    public function setProfil(\MBLBundle\Entity\Profil $profil = null)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return \MBLBundle\Entity\Profil
     */
    public function getProfil()
    {
        return $this->profil;
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
}
