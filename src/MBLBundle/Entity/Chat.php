<?php

namespace MBLBundle\Entity;

/**
 * Chat
 */
class Chat
{

    public function __construct()
    {
        $this->msgs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->profils = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateCreation = new \DateTime();
    }

    //generated code
   

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name_fr;

    /**
     * @var string
     */
    private $name_it;

    /**
     * @var \DateTime
     */
    private $dateCreation_fr;

    /**
     * @var \DateTime
     */
    private $dateCreation_it;

    /**
     * @var integer
     */
    private $connectionbyidcreator_fr;

    /**
     * @var integer
     */
    private $connectionbyidcreator_it;

    /**
     * @var integer
     */
    private $connectionbyid_fr;

    /**
     * @var integer
     */
    private $connectionbyid_it;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $msgs;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $profils;


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
        $this->name_fr = $nameFr;

        return $this;
    }

    /**
     * Get nameFr
     *
     * @return string
     */
    public function getNameFr()
    {
        return $this->name_fr;
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
        $this->name_it = $nameIt;

        return $this;
    }

    /**
     * Get nameIt
     *
     * @return string
     */
    public function getNameIt()
    {
        return $this->name_it;
    }

    /**
     * Set dateCreationFr
     *
     * @param \DateTime $dateCreationFr
     *
     * @return Chat
     */
    public function setDateCreationFr($dateCreationFr)
    {
        $this->dateCreation_fr = $dateCreationFr;

        return $this;
    }

    /**
     * Get dateCreationFr
     *
     * @return \DateTime
     */
    public function getDateCreationFr()
    {
        return $this->dateCreation_fr;
    }

    /**
     * Set dateCreationIt
     *
     * @param \DateTime $dateCreationIt
     *
     * @return Chat
     */
    public function setDateCreationIt($dateCreationIt)
    {
        $this->dateCreation_it = $dateCreationIt;

        return $this;
    }

    /**
     * Get dateCreationIt
     *
     * @return \DateTime
     */
    public function getDateCreationIt()
    {
        return $this->dateCreation_it;
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
        $this->connectionbyidcreator_fr = $connectionbyidcreatorFr;

        return $this;
    }

    /**
     * Get connectionbyidcreatorFr
     *
     * @return integer
     */
    public function getConnectionbyidcreatorFr()
    {
        return $this->connectionbyidcreator_fr;
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
        $this->connectionbyidcreator_it = $connectionbyidcreatorIt;

        return $this;
    }

    /**
     * Get connectionbyidcreatorIt
     *
     * @return integer
     */
    public function getConnectionbyidcreatorIt()
    {
        return $this->connectionbyidcreator_it;
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
        $this->connectionbyid_fr = $connectionbyidFr;

        return $this;
    }

    /**
     * Get connectionbyidFr
     *
     * @return integer
     */
    public function getConnectionbyidFr()
    {
        return $this->connectionbyid_fr;
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
        $this->connectionbyid_it = $connectionbyidIt;

        return $this;
    }

    /**
     * Get connectionbyidIt
     *
     * @return integer
     */
    public function getConnectionbyidIt()
    {
        return $this->connectionbyid_it;
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
