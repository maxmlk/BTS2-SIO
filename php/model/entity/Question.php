<?php


class Question
{
    private int $identifiant;
    private string $titre;
    private string $createdAt;
    private int $type;
    private string $profil;
    private string $categorie;

    /**
     * Question constructor.
     * @param int $identifiant
     * @param string $titre
     * @param string $createdAt
     * @param string $profil
     * @param string $categorie
     * @param int $type
     */
    public function __construct(int $identifiant, string $titre, string $createdAt, string $profil, string $categorie, int $type)
    {
        $this->identifiant = $identifiant;
        $this->titre = $titre;
        $this->createdAt = $createdAt;
        $this->profil = $profil;
        $this->categorie = $categorie;
        $this->type = $type;
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
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getProfil(): string
    {
        return $this->profil;
    }

    /**
     * @param string $profil
     */
    public function setProfil(string $profil): void
    {
        $this->profil = $profil;
    }

    /**
     * @return string
     */
    public function getCategorie(): string
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie(string $categorie): void
    {
        $this->categorie = $categorie;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type): void
    {
        $this->type = $type;
    }

}