<?php

namespace App\Model;

class Homme
{
    protected string $nom;
    protected int $age;
    protected float $taille;
    protected float $poids;
    protected float $pointure;
    protected string $yeux;

    /**
     * Homme constructor.
     * @param $nom
     * @param $age
     */
    public function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return float
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param float $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    /**
     * @return float
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * @param float $poids
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }

    /**
     * @return float
     */
    public function getPointure()
    {
        return $this->pointure;
    }

    /**
     * @param float $pointure
     */
    public function setPointure($pointure)
    {
        $this->pointure = $pointure;
    }

    /**
     * @return string
     */
    public function getYeux()
    {
        return $this->yeux;
    }

    /**
     * @param string $yeux
     */
    public function setYeux($yeux)
    {
        $this->yeux = $yeux;
    }

    /**
     * @return string
     */
    public function sePresente()
    {
        return 'Il s\'agit d\'un humain qui s\'appelle '.$this->nom.'. Il a '.$this->age.'ans.';
    }

    /**
     * @param int $qte
     */
    public function getQteManger($qte)
    {
        return 'Je mange '.$qte.' gramme.s de croquette.s.';
    }

    /**
     * @param int $qte
     */
    public function getQteBu($qte)
    {
        return 'Je bois '.$qte.' cl d\'eau.';
    }
}