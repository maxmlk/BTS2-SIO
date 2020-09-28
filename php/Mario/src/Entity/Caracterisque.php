<?php

namespace App\Entity;

class Caracterisque
{
    private int $id;
    private string $nom;
    private float $qte;
    private float $mode;

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
    public function getQte(): float
    {
        return $this->qte;
    }

    /**
     * @param float $qte
     */
    public function setQte(float $qte): void
    {
        $this->qte = $qte;
    }

    /**
     * @return float
     */
    public function getMode(): float
    {
        return $this->mode;
    }

    /**
     * @param float $mode
     */
    public function setMode(float $mode): void
    {
        $this->mode = $mode;
    }

}