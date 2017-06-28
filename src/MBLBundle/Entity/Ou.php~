<?php

namespace MBLBundle\Entity;

/**
 * Ou
 */
class Ou
{


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $ou_fr;

    /**
     * @var string
     */
    private $ou_it;

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
     * Set ouFr
     *
     * @param string $ouFr
     *
     * @return Ou
     */
    public function setOuFr($ouFr)
    {
        $this->ou_fr = $ouFr;

        return $this;
    }

    /**
     * Get ouFr
     *
     * @return string
     */
    public function getOuFr()
    {
        return $this->ou_fr;
    }

    /**
     * Set ouIt
     *
     * @param string $ouIt
     *
     * @return Ou
     */
    public function setOuIt($ouIt)
    {
        $this->ou_it = $ouIt;

        return $this;
    }

    /**
     * Get ouIt
     *
     * @return string
     */
    public function getOuIt()
    {
        return $this->ou_it;
    }

    /**
     * Add profil
     *
     * @param \MBLBundle\Entity\Profil $profil
     *
     * @return Ou
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
     * @return Ou
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
