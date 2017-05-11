<?php

namespace MBLBundle\Entity;

/**
 * Ou
 */
class Ou
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $ou;


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
     * Set ou
     *
     * @param string $ou
     *
     * @return Ou
     */
    public function setOu($ou)
    {
        $this->ou = $ou;

        return $this;
    }

    /**
     * Get ou
     *
     * @return string
     */
    public function getOu()
    {
        return $this->ou;
    }
}

