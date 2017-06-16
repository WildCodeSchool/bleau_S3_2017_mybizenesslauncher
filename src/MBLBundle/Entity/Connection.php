<?php

namespace MBLBundle\Entity;

/**
 * Connection
 */
class Connection
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $connecté;

    /**
     * @var \DateTime
     */
    private $dateCréation;


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
     * Set connecté
     *
     * @param boolean $connecté
     *
     * @return Connection
     */
    public function setConnecté($connecté)
    {
        $this->connecté = $connecté;

        return $this;
    }

    /**
     * Get connecté
     *
     * @return bool
     */
    public function getConnecté()
    {
        return $this->connecté;
    }

    /**
     * Set dateCréation
     *
     * @param \DateTime $dateCréation
     *
     * @return Connection
     */
    public function setDateCréation($dateCréation)
    {
        $this->dateCréation = $dateCréation;

        return $this;
    }

    /**
     * Get dateCréation
     *
     * @return \DateTime
     */
    public function getDateCréation()
    {
        return $this->dateCréation;
    }
}

