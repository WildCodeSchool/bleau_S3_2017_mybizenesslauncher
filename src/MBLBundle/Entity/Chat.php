<?php

namespace MBLBundle\Entity;

/**
 * Chat
 */
class Chat
{


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nameFr;

    /**
     * @var string
     */
    private $nameIt;

    /**
     * @var \DateTime
     */
    private $dateCreation;

    /**
     * @var integer
     */
    private $connectionbyidcreatorFr;

    /**
     * @var integer
     */
    private $connectionbyidcreatorIt;

    /**
     * @var integer
     */
    private $connectionbyidFr;

    /**
     * @var integer
     */
    private $connectionbyidIt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $msgs;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $profils;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->msgs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nameFr
     *
     * @param string $nameFr
     *
     * @return Chat
     */
    public function setNameFr($nameFr)
    {
        $this->nameFr = $nameFr;

        return $this;
    }

    /**
     * Get nameFr
     *
     * @return string
     */
    public function getNameFr()
    {
        return $this->nameFr;
    }

    /**
     * Set nameIt
     *
     * @param string $nameIt
     *
     * @return Chat
     */
    public function setNameIt($nameIt)
    {
        $this->nameIt = $nameIt;

        return $this;
    }

    /**
     * Get nameIt
     *
     * @return string
     */
    public function getNameIt()
    {
        return $this->nameIt;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Chat
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set connectionbyidcreatorFr
     *
     * @param integer $connectionbyidcreatorFr
     *
     * @return Chat
     */
    public function setConnectionbyidcreatorFr($connectionbyidcreatorFr)
    {
        $this->connectionbyidcreatorFr = $connectionbyidcreatorFr;

        return $this;
    }

    /**
     * Get connectionbyidcreatorFr
     *
     * @return integer
     */
    public function getConnectionbyidcreatorFr()
    {
        return $this->connectionbyidcreatorFr;
    }

    /**
     * Set connectionbyidcreatorIt
     *
     * @param integer $connectionbyidcreatorIt
     *
     * @return Chat
     */
    public function setConnectionbyidcreatorIt($connectionbyidcreatorIt)
    {
        $this->connectionbyidcreatorIt = $connectionbyidcreatorIt;

        return $this;
    }

    /**
     * Get connectionbyidcreatorIt
     *
     * @return integer
     */
    public function getConnectionbyidcreatorIt()
    {
        return $this->connectionbyidcreatorIt;
    }

    /**
     * Set connectionbyidFr
     *
     * @param integer $connectionbyidFr
     *
     * @return Chat
     */
    public function setConnectionbyidFr($connectionbyidFr)
    {
        $this->connectionbyidFr = $connectionbyidFr;

        return $this;
    }

    /**
     * Get connectionbyidFr
     *
     * @return integer
     */
    public function getConnectionbyidFr()
    {
        return $this->connectionbyidFr;
    }

    /**
     * Set connectionbyidIt
     *
     * @param integer $connectionbyidIt
     *
     * @return Chat
     */
    public function setConnectionbyidIt($connectionbyidIt)
    {
        $this->connectionbyidIt = $connectionbyidIt;

        return $this;
    }

    /**
     * Get connectionbyidIt
     *
     * @return integer
     */
    public function getConnectionbyidIt()
    {
        return $this->connectionbyidIt;
    }

    /**
     * Add msg
     *
     * @param \MBLBundle\Entity\Text $msg
     *
     * @return Chat
     */
    public function addMsg(\MBLBundle\Entity\Text $msg)
    {
        $this->msgs[] = $msg;

        return $this;
    }

    /**
     * Remove msg
     *
     * @param \MBLBundle\Entity\Text $msg
     */
    public function removeMsg(\MBLBundle\Entity\Text $msg)
    {
        $this->msgs->removeElement($msg);
    }

    /**
     * Get msgs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMsgs()
    {
        return $this->msgs;
    }

    /**
     * Add profil
     *
     * @param \MBLBundle\Entity\Profil $profil
     *
     * @return Chat
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
