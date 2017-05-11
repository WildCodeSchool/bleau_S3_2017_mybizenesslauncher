<?php

namespace MBLBundle\Entity;

/**
 * ETQ
 */
class ETQ
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $etq;


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
     * Set etq
     *
     * @param string $etq
     *
     * @return ETQ
     */
    public function setEtq($etq)
    {
        $this->etq = $etq;

        return $this;
    }

    /**
     * Get etq
     *
     * @return string
     */
    public function getEtq()
    {
        return $this->etq;
    }
}

