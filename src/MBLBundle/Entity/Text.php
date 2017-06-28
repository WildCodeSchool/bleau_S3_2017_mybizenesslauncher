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
    private $msg_fr;

    /**
     * @var string
     */
    private $msg_it;

    /**
     * @var \DateTime
     */
    private $datecreation_fr;

    /**
     * @var \DateTime
     */
    private $datecreation_it;

    /**
     * @var string
     */
    private $profil_fr;

    /**
     * @var string
     */
    private $profil_it;

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
     * Set msgFr
     *
     * @param string $msgFr
     *
     * @return Text
     */
    public function setMsgFr($msgFr)
    {
        $this->msg_fr = $msgFr;

        return $this;
    }

    /**
     * Get msgFr
     *
     * @return string
     */
    public function getMsgFr()
    {
        return $this->msg_fr;
    }

    /**
     * Set msgIt
     *
     * @param string $msgIt
     *
     * @return Text
     */
    public function setMsgIt($msgIt)
    {
        $this->msg_it = $msgIt;

        return $this;
    }

    /**
     * Get msgIt
     *
     * @return string
     */
    public function getMsgIt()
    {
        return $this->msg_it;
    }

    /**
     * Set datecreationFr
     *
     * @param \DateTime $datecreationFr
     *
     * @return Text
     */
    public function setDatecreationFr($datecreationFr)
    {
        $this->datecreation_fr = $datecreationFr;

        return $this;
    }

    /**
     * Get datecreationFr
     *
     * @return \DateTime
     */
    public function getDatecreationFr()
    {
        return $this->datecreation_fr;
    }

    /**
     * Set datecreationIt
     *
     * @param \DateTime $datecreationIt
     *
     * @return Text
     */
    public function setDatecreationIt($datecreationIt)
    {
        $this->datecreation_it = $datecreationIt;

        return $this;
    }

    /**
     * Get datecreationIt
     *
     * @return \DateTime
     */
    public function getDatecreationIt()
    {
        return $this->datecreation_it;
    }

    /**
     * Set profilFr
     *
     * @param string $profilFr
     *
     * @return Text
     */
    public function setProfilFr($profilFr)
    {
        $this->profil_fr = $profilFr;

        return $this;
    }

    /**
     * Get profilFr
     *
     * @return string
     */
    public function getProfilFr()
    {
        return $this->profil_fr;
    }

    /**
     * Set profilIt
     *
     * @param string $profilIt
     *
     * @return Text
     */
    public function setProfilIt($profilIt)
    {
        $this->profil_it = $profilIt;

        return $this;
    }

    /**
     * Get profilIt
     *
     * @return string
     */
    public function getProfilIt()
    {
        return $this->profil_it;
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
