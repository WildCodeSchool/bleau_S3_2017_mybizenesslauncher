<?php

namespace MBLBundle\Entity;

/**
 * Dispo
 */
class Dispo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $dispo;


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
     * Set dispo
     *
     * @param string $dispo
     *
     * @return Dispo
     */
    public function setDispo($dispo)
    {
        $this->dispo = $dispo;

        return $this;
    }

    /**
     * Get dispo
     *
     * @return string
     */
    public function getDispo()
    {
        return $this->dispo;
    }
}

