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
    private $msgFr;

    /**
     * @var string
     */
    private $msgIt;

    /**
     * @var \DateTime
     */
    private $datecreationFr;

    /**
     * @var \DateTime
     */
    private $datecreationIt;

    /**
     * @var string
     */
    private $profilFr;

    /**
     * @var string
     */
    private $profilIt;

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
        $this->msgFr = $msgFr;

        return $this;
    }

    /**
     * Get msgFr
     *
     * @return string
     */
    public function getMsgFr()
    {
        return $this->msgFr;
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
        $this->msgIt = $msgIt;

        return $this;
    }

    /**
     * Get msgIt
     *
     * @return string
     */
    public function getMsgIt()
    {
        return $this->msgIt;
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
        $this->datecreationFr = $datecreationFr;

        return $this;
    }

    /**
     * Get datecreationFr
     *
     * @return \DateTime
     */
    public function getDatecreationFr()
    {
        return $this->datecreationFr;
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
        $this->datecreationIt = $datecreationIt;

        return $this;
    }

    /**
     * Get datecreationIt
     *
     * @return \DateTime
     */
    public function getDatecreationIt()
    {
        return $this->datecreationIt;
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
        $this->profilFr = $profilFr;

        return $this;
    }

    /**
     * Get profilFr
     *
     * @return string
     */
    public function getProfilFr()
    {
        return $this->profilFr;
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
        $this->profilIt = $profilIt;

        return $this;
    }

    /**
     * Get profilIt
     *
     * @return string
     */
    public function getProfilIt()
    {
        return $this->profilIt;
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
