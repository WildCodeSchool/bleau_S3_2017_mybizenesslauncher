<?php

namespace MBLBundle\Entity;

/**
 * Text
 */
class Text
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $msg;

    /**
     * @var \DateTime
     */
    private $datecreation;

    /**
     * @var \MBLBundle\Entity\Profil
     */
    private $profil;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $chats;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->chats = new \Doctrine\Common\Collections\ArrayCollection();
        $this->datecreation = new \datetime();
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
     * Set msg
     *
     * @param string $msg
     *
     * @return Text
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;

        return $this;
    }

    /**
     * Get msg
     *
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Text
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set profil
     *
     * @param \MBLBundle\Entity\Profil $profil
     *
     * @return Text
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
     * Add chat
     *
     * @param \MBLBundle\Entity\Chat $chat
     *
     * @return Text
     */
    public function addChat(\MBLBundle\Entity\Chat $chat)
    {
        $this->chats[] = $chat;

        return $this;
    }

    /**
     * Remove chat
     *
     * @param \MBLBundle\Entity\Chat $chat
     */
    public function removeChat(\MBLBundle\Entity\Chat $chat)
    {
        $this->chats->removeElement($chat);
    }

    /**
     * Get chats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChats()
    {
        return $this->chats;
    }
}