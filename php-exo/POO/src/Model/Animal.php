<?php

namespace App\Model;

abstract class Animal {
    protected $nom;
    protected $taille;
    protected $poids;
    protected $age;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function getTaille(): float
    {
        return $this->taille;
    }

    public function setTaille(float $taille)
    {
        $this->taille = $taille;
    }

    public function getPoids(): float
    {
        return $this->poids;
    }

    public function setPoids(float $poids)
    {
        $this->poids = $poids;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getQteManger(int $qte)
    {
        return 'Je mange '.$qte.' gramme.s de croquette.s.';
    }

    public function getQteBu(int $qte)
    {
        return 'Je bois '.$qte.' cl d\'eau.';
    }
}