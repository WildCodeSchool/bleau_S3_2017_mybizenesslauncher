<?php

namespace MBLBundle\Entity;

/**
 * ProfilRecherche
 */
class ProfilRecherche
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $disponibleETQ;

    /**
     * @var string
     */
    private $competences;

    /**
     * @var string
     */
    private $ou;

    /**
     * @var string
     */
    private $invest;

    /**
     * @var string
     */
    private $dispo;

    /**
     * @var string
     */
    private $metier;


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
     * Set disponibleETQ
     *
     * @param string $disponibleETQ
     *
     * @return ProfilRecherche
     */
    public function setDisponibleETQ($disponibleETQ)
    {
        $this->disponibleETQ = $disponibleETQ;

        return $this;
    }

    /**
     * Get disponibleETQ
     *
     * @return string
     */
    public function getDisponibleETQ()
    {
        return $this->disponibleETQ;
    }

    /**
     * Set competences
     *
     * @param string $competences
     *
     * @return ProfilRecherche
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

    /**
     * Set ou
     *
     * @param string $ou
     *
     * @return ProfilRecherche
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

    /**
     * Set invest
     *
     * @param string $invest
     *
     * @return ProfilRecherche
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

    /**
     * Set dispo
     *
     * @param string $dispo
     *
     * @return ProfilRecherche
     */
    public function setDispo($dispo)
    {
        $this->dispo = $dispo;

        return $this;
    }

    /**
     * Get dispo
     *
     * @return string
     */
    public function getDispo()
    {
        return $this->dispo;
    }

    /**
     * Set metier
     *
     * @param string $metier
     *
     * @return ProfilRecherche
     */
    public function setMetier($metier)
    {
        $this->metier = $metier;

        return $this;
    }

    /**
     * Get metier
     *
     * @return string
     */
    public function getMetier()
    {
        return $this->metier;
    }
}

