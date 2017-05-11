<?php

namespace MBLBundle\Entity;

/**
 * Invest
 */
class Invest
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $invest;


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
     * Set invest
     *
     * @param string $invest
     *
     * @return Invest
     */
    public function setInvest($invest)
    {
        $this->invest = $invest;

        return $this;
    }

    /**
     * Get invest
     *
     * @return string
     */
    public function getInvest()
    {
        return $this->invest;
    }
}

