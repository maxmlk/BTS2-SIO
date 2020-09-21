<?php

class Category
{
    private int $identifiant;
    private string $libelle;

    /**
     * Category constructor.
     * @param int $identifiant
     * @param string $libelle
     */
    public function __construct(int $identifiant, string $libelle)
    {
        $this->identifiant = $identifiant;
        $this->libelle = $libelle;
    }

    /**
     * @return int
     */
    public function getIdentifiant(): int
    {
        return $this->identifiant;
    }

    /**
     * @param int $identifiant
     */
    public function setIdentifiant(int $identifiant): void
    {
        $this->identifiant = $identifiant;
    }

    /**
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle(string $libelle): void
    {
        $this->libelle = $libelle;
    }

}