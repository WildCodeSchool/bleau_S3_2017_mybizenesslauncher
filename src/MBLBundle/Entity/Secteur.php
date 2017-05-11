<?php

namespace MBLBundle\Entity;

/**
 * Secteur
 */
class Secteur
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $secteurActivite;


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
     * Set secteurActivite
     *
     * @param string $secteurActivite
     *
     * @return Secteur
     */
    public function setSecteurActivite($secteurActivite)
    {
        $this->secteurActivite = $secteurActivite;

        return $this;
    }

    /**
     * Get secteurActivite
     *
     * @return string
     */
    public function getSecteurActivite()
    {
        return $this->secteurActivite;
    }
}

