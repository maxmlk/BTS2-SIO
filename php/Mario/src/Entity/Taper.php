<?php

namespace App\Entity;

class Taper
{
    private Personnage $perso;
    private Ennemi $ennemi;

    /**
     * @return Personnage
     */
    public function getPerso(): Personnage
    {
        return $this->perso;
    }

    /**
     * @param Personnage $perso
     */
    public function setPerso(Personnage $perso): void
    {
        $this->perso = $perso;
    }

    /**
     * @return Ennemi
     */
    public function getEnnemi(): Ennemi
    {
        return $this->ennemi;
    }

    /**
     * @param Ennemi $ennemi
     */
    public function setEnnemi(Ennemi $ennemi): void
    {
        $this->ennemi = $ennemi;
    }

    public function hit(): void
    {
        
    }
}