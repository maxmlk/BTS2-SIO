<?php

namespace App\Model;

class Chien extends Animal
{

	public function aboie(int $repitition = 1): string
	{
		return 'J\'aboie '.$repitition.' fois.';
	}

	public function sePresente()
	{
		return 'Il s\'agit d\'un chien qui s\'appelle '.$this->nom.'. Il a '.$this->age.' ans, il mesure '.$this->taille.' ans, Il mesure '.$this->poids.'.';
	}
}