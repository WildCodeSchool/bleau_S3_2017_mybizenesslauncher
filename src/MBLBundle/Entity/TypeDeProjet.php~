<?php

namespace MBLBundle\Entity;

/**
 * TypeDeProjet
 */
class TypeDeProjet
{


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $typeDeProjet_fr;

    /**
     * @var string
     */
    private $typeDeProjet_it;

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
     * Set typeDeProjetFr
     *
     * @param string $typeDeProjetFr
     *
     * @return TypeDeProjet
     */
    public function setTypeDeProjetFr($typeDeProjetFr)
    {
        $this->typeDeProjet_fr = $typeDeProjetFr;

        return $this;
    }

    /**
     * Get typeDeProjetFr
     *
     * @return string
     */
    public function getTypeDeProjetFr()
    {
        return $this->typeDeProjet_fr;
    }

    /**
     * Set typeDeProjetIt
     *
     * @param string $typeDeProjetIt
     *
     * @return TypeDeProjet
     */
    public function setTypeDeProjetIt($typeDeProjetIt)
    {
        $this->typeDeProjet_it = $typeDeProjetIt;

        return $this;
    }

    /**
     * Get typeDeProjetIt
     *
     * @return string
     */
    public function getTypeDeProjetIt()
    {
        return $this->typeDeProjet_it;
    }

    /**
     * Add projet
     *
     * @param \MBLBundle\Entity\Projet $projet
     *
     * @return TypeDeProjet
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
