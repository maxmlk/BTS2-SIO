<?php

namespace App\Entity;

class Pouvoir
{
    private int $id;
    private string $nom;
    private float $delais;
    private string $effet;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return float
     */
    public function getDelais(): float
    {
        return $this->delais;
    }

    /**
     * @param float $delais
     */
    public function setDelais(float $delais): void
    {
        $this->delais = $delais;
    }

    /**
     * @return string
     */
    public function getEffet(): string
    {
        return $this->effet;
    }

    /**
     * @param string $effet
     */
    public function setEffet(string $effet): void
    {
        $this->effet = $effet;
    }

}