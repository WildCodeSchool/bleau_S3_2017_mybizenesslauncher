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
    private $name;

    /**
     * @var \DateTime
     */
    private $dateCreation;

    /**
     * @var integer
     */
    private $connectionbyidcreator;

    /**
     * @var integer
     */
    private $connectionbyid;

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
        $this->dateCreation = new \DateTime();
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
     * Set name
     *
     * @param string $name
     *
     * @return Chat
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * Set connectionbyidcreator
     *
     * @param integer $connectionbyidcreator
     *
     * @return Chat
     */
    public function setConnectionbyidcreator($connectionbyidcreator)
    {
        $this->connectionbyidcreator = $connectionbyidcreator;

        return $this;
    }

    /**
     * Get connectionbyidcreator
     *
     * @return integer
     */
    public function getConnectionbyidcreator()
    {
        return $this->connectionbyidcreator;
    }

    /**
     * Set connectionbyid
     *
     * @param integer $connectionbyid
     *
     * @return Chat
     */
    public function setConnectionbyid($connectionbyid)
    {
        $this->connectionbyid = $connectionbyid;

        return $this;
    }

    /**
     * Get connectionbyid
     *
     * @return integer
     */
    public function getConnectionbyid()
    {
        return $this->connectionbyid;
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
