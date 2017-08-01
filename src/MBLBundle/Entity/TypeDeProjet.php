<?php

namespace MBLBundle\Entity;

/**
 * TypeDeProjet
 */
class TypeDeProjet
{

	public function __toString()
	{
		return $this->getTypeDeProjetit();
	}

	// Generated code

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $typeDeProjetfr;

    /**
     * @var string
     */
    private $typeDeProjetit;

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
     * Set typeDeProjetfr
     *
     * @param string $typeDeProjetfr
     *
     * @return TypeDeProjet
     */
    public function setTypeDeProjetfr($typeDeProjetfr)
    {
        $this->typeDeProjetfr = $typeDeProjetfr;

        return $this;
    }

    /**
     * Get typeDeProjetfr
     *
     * @return string
     */
    public function getTypeDeProjetfr()
    {
        return $this->typeDeProjetfr;
    }

    /**
     * Set typeDeProjetit
     *
     * @param string $typeDeProjetit
     *
     * @return TypeDeProjet
     */
    public function setTypeDeProjetit($typeDeProjetit)
    {
        $this->typeDeProjetit = $typeDeProjetit;

        return $this;
    }

    /**
     * Get typeDeProjetit
     *
     * @return string
     */
    public function getTypeDeProjetit()
    {
        return $this->typeDeProjetit;
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
