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
    private $namefr;

    /**
     * @var string
     */
    private $nameit;

    /**
     * @var \DateTime
     */
    private $dateCreation;

    /**
     * @var integer
     */
    private $connectionbyidcreatorfr;

    /**
     * @var integer
     */
    private $connectionbyidcreatorit;

    /**
     * @var integer
     */
    private $connectionbyidfr;

    /**
     * @var integer
     */
    private $connectionbyidit;

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
     * Set namefr
     *
     * @param string $namefr
     *
     * @return Chat
     */
    public function setNamefr($namefr)
    {
        $this->namefr = $namefr;

        return $this;
    }

    /**
     * Get namefr
     *
     * @return string
     */
    public function getNamefr()
    {
        return $this->namefr;
    }

    /**
     * Set nameit
     *
     * @param string $nameit
     *
     * @return Chat
     */
    public function setNameit($nameit)
    {
        $this->nameit = $nameit;

        return $this;
    }

    /**
     * Get nameit
     *
     * @return string
     */
    public function getNameit()
    {
        return $this->nameit;
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
     * Set connectionbyidcreatorfr
     *
     * @param integer $connectionbyidcreatorfr
     *
     * @return Chat
     */
    public function setConnectionbyidcreatorfr($connectionbyidcreatorfr)
    {
        $this->connectionbyidcreatorfr = $connectionbyidcreatorfr;

        return $this;
    }

    /**
     * Get connectionbyidcreatorfr
     *
     * @return integer
     */
    public function getConnectionbyidcreatorfr()
    {
        return $this->connectionbyidcreatorfr;
    }

    /**
     * Set connectionbyidcreatorit
     *
     * @param integer $connectionbyidcreatorit
     *
     * @return Chat
     */
    public function setConnectionbyidcreatorit($connectionbyidcreatorit)
    {
        $this->connectionbyidcreatorit = $connectionbyidcreatorit;

        return $this;
    }

    /**
     * Get connectionbyidcreatorit
     *
     * @return integer
     */
    public function getConnectionbyidcreatorit()
    {
        return $this->connectionbyidcreatorit;
    }

    /**
     * Set connectionbyidfr
     *
     * @param integer $connectionbyidfr
     *
     * @return Chat
     */
    public function setConnectionbyidfr($connectionbyidfr)
    {
        $this->connectionbyidfr = $connectionbyidfr;

        return $this;
    }

    /**
     * Get connectionbyidfr
     *
     * @return integer
     */
    public function getConnectionbyidfr()
    {
        return $this->connectionbyidfr;
    }

    /**
     * Set connectionbyidit
     *
     * @param integer $connectionbyidit
     *
     * @return Chat
     */
    public function setConnectionbyidit($connectionbyidit)
    {
        $this->connectionbyidit = $connectionbyidit;

        return $this;
    }

    /**
     * Get connectionbyidit
     *
     * @return integer
     */
    public function getConnectionbyidit()
    {
        return $this->connectionbyidit;
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
