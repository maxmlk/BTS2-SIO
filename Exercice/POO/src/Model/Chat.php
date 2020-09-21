<?php

namespace App\Model;

class Chat extends Animal
{
	private bool $chasseur;

	public function __construct(string $nom, bool $chasseur = false)
	{
		parent::__construct($nom);
		$this->chasseur = $chasseur;
	}

	public function miaule(int $repitition = 1): string
	{
		return 'Je miaule '.$repitition.' fois.';
	}

	public function sePresente()
	{
		return 'Il s\'agit d\'un chat qui s\'appelle '.$this->nom.'. Il a '.$this->age.' ans, il mesure '.$this->taille.' ans, Il mesure '.$this->poids.'.';
	}

	public function isChasseur(): string
	{
		if ($this->chasseur === false) {
			return 'Ce n\'est pas un chasseur';
		} else{
			return 'C\'est un chasseur';
		}
	}

	public function setChasseur(bool $chasseur)
	{
		$this->chasseur = $chasseur;
	}
}