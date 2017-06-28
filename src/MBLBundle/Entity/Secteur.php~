<?php

namespace MBLBundle\Entity;

/**
 * Secteur
 */
class Secteur
{


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $secteurActivite_fr;

    /**
     * @var string
     */
    private $secteurActivite_it;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $projets;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->projets = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set secteurActiviteFr
     *
     * @param string $secteurActiviteFr
     *
     * @return Secteur
     */
    public function setSecteurActiviteFr($secteurActiviteFr)
    {
        $this->secteurActivite_fr = $secteurActiviteFr;

        return $this;
    }

    /**
     * Get secteurActiviteFr
     *
     * @return string
     */
    public function getSecteurActiviteFr()
    {
        return $this->secteurActivite_fr;
    }

    /**
     * Set secteurActiviteIt
     *
     * @param string $secteurActiviteIt
     *
     * @return Secteur
     */
    public function setSecteurActiviteIt($secteurActiviteIt)
    {
        $this->secteurActivite_it = $secteurActiviteIt;

        return $this;
    }

    /**
     * Get secteurActiviteIt
     *
     * @return string
     */
    public function getSecteurActiviteIt()
    {
        return $this->secteurActivite_it;
    }

    /**
     * Add projet
     *
     * @param \MBLBundle\Entity\Projet $projet
     *
     * @return Secteur
     */
    public function addProjet(\MBLBundle\Entity\Projet $projet)
    {
        $this->projets[] = $projet;

        return $this;
    }

    /**
     * Remove projet
     *
     * @param \MBLBundle\Entity\Projet $projet
     */
    public function removeProjet(\MBLBundle\Entity\Projet $projet)
    {
        $this->projets->removeElement($projet);
    }

    /**
     * Get projets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjets()
    {
        return $this->projets;
    }
}
