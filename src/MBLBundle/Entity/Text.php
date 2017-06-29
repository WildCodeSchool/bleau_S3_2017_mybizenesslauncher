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
    private $msgfr;

    /**
     * @var string
     */
    private $msgIt;

    /**
     * @var \DateTime
     */
    private $datecreationfr;

    /**
     * @var \DateTime
     */
    private $datecreationit;

    /**
     * @var string
     */
    private $profilfr;

    /**
     * @var string
     */
    private $profilit;

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
     * Set msgfr
     *
     * @param string $msgfr
     *
     * @return Text
     */
    public function setMsgfr($msgfr)
    {
        $this->msgfr = $msgfr;

        return $this;
    }

    /**
     * Get msgfr
     *
     * @return string
     */
    public function getMsgfr()
    {
        return $this->msgfr;
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
     * Set datecreationfr
     *
     * @param \DateTime $datecreationfr
     *
     * @return Text
     */
    public function setDatecreationfr($datecreationfr)
    {
        $this->datecreationfr = $datecreationfr;

        return $this;
    }

    /**
     * Get datecreationfr
     *
     * @return \DateTime
     */
    public function getDatecreationfr()
    {
        return $this->datecreationfr;
    }

    /**
     * Set datecreationit
     *
     * @param \DateTime $datecreationit
     *
     * @return Text
     */
    public function setDatecreationit($datecreationit)
    {
        $this->datecreationit = $datecreationit;

        return $this;
    }

    /**
     * Get datecreationit
     *
     * @return \DateTime
     */
    public function getDatecreationit()
    {
        return $this->datecreationit;
    }

    /**
     * Set profilfr
     *
     * @param string $profilfr
     *
     * @return Text
     */
    public function setProfilfr($profilfr)
    {
        $this->profilfr = $profilfr;

        return $this;
    }

    /**
     * Get profilfr
     *
     * @return string
     */
    public function getProfilfr()
    {
        return $this->profilfr;
    }

    /**
     * Set profilit
     *
     * @param string $profilit
     *
     * @return Text
     */
    public function setProfilit($profilit)
    {
        $this->profilit = $profilit;

        return $this;
    }

    /**
     * Get profilit
     *
     * @return string
     */
    public function getProfilit()
    {
        return $this->profilit;
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
