<?php

namespace MBLBundle\Entity;

/**
 * Chat
 */
class Chat
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;


    /**
     * Get id
     *
     * @return int
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $msgs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->msgs = new \Doctrine\Common\Collections\ArrayCollection();
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
}
