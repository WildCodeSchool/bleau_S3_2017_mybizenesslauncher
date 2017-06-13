<?php

namespace MBLBundle\Entity;

/**
 * Fichier
 */
class Fichier
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var \MBLBundle\Entity\Projet
     */
    private $projet;

    /**
     * @var \MBLBundle\Entity\Profil
     */
    private $profil;


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
     * Set photo
     *
     * @param string $photo
     *
     * @return Fichier
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set projet
     *
     * @param \MBLBundle\Entity\Projet $projet
     *
     * @return Fichier
     */
    public function setProjet(\MBLBundle\Entity\Projet $projet = null)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \MBLBundle\Entity\Projet
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * Set profil
     *
     * @param \MBLBundle\Entity\Profil $profil
     *
     * @return Fichier
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
}
