<?php

class Role
{
    private int $role;
    private string $libelle;

    /**
     * Role constructor.
     * @param int $role
     * @param string $libelle
     */
    public function __construct(int $role, string $libelle)
    {
        $this->role = $role;
        $this->libelle = $libelle;
    }

    /**
     * @return int
     */
    public function getRole(): int
    {
        return $this->role;
    }

    /**
     * @param int $role = 1
     */
    public function setRole(int $role = 1): void
    {
        $this->role = $role;
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