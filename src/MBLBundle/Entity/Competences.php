<?php

namespace MBLBundle\Entity;

/**
 * Competences
 */
class Competences
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $competences;


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
     * Set competences
     *
     * @param string $competences
     *
     * @return Competences
     */
    public function setCompetences($competences)
    {
        $this->competences = $competences;

        return $this;
    }

    /**
     * Get competences
     *
     * @return string
     */
    public function getCompetences()
    {
        return $this->competences;
    }
}

