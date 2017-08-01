<?php

namespace MBLBundle\Entity;

/**
 * Secteur
 */
class Secteur
{

	public function __toString()
	{
		return $this->getSecteurActiviteit();
	}

	// Generated code

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $secteurActivitefr;

    /**
     * @var string
     */
    private $secteurActiviteit;

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
     * Set secteurActivitefr
     *
     * @param string $secteurActivitefr
     *
     * @return Secteur
     */
    public function setSecteurActivitefr($secteurActivitefr)
    {
        $this->secteurActivitefr = $secteurActivitefr;

        return $this;
    }

    /**
     * Get secteurActivitefr
     *
     * @return string
     */
    public function getSecteurActivitefr()
    {
        return $this->secteurActivitefr;
    }

    /**
     * Set secteurActiviteit
     *
     * @param string $secteurActiviteit
     *
     * @return Secteur
     */
    public function setSecteurActiviteit($secteurActiviteit)
    {
        $this->secteurActiviteit = $secteurActiviteit;

        return $this;
    }

    /**
     * Get secteurActiviteit
     *
     * @return string
     */
    public function getSecteurActiviteit()
    {
        return $this->secteurActiviteit;
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
