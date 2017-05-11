<?php

namespace MBLBundle\Entity;

/**
 * TypeDeProjet
 */
class TypeDeProjet
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $typeDeProjet;


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
     * Set typeDeProjet
     *
     * @param string $typeDeProjet
     *
     * @return TypeDeProjet
     */
    public function setTypeDeProjet($typeDeProjet)
    {
        $this->typeDeProjet = $typeDeProjet;

        return $this;
    }

    /**
     * Get typeDeProjet
     *
     * @return string
     */
    public function getTypeDeProjet()
    {
        return $this->typeDeProjet;
    }
}

