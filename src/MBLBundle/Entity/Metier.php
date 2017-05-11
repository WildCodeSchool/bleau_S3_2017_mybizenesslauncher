<?php

namespace MBLBundle\Entity;

/**
 * Metier
 */
class Metier
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $metier;


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
     * Set metier
     *
     * @param string $metier
     *
     * @return Metier
     */
    public function setMetier($metier)
    {
        $this->metier = $metier;

        return $this;
    }

    /**
     * Get metier
     *
     * @return string
     */
    public function getMetier()
    {
        return $this->metier;
    }
}

