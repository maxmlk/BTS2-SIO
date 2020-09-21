<?php

class Response
{
    private int $identifiant;
    private string $content;
    private string $createdAt;
    private int $profil;
    private int $question;

    /**
     * Response constructor.
     * @param int $identifiant
     * @param string $content
     * @param string $createdAt
     * @param int $profil
     * @param int $question
     */
    public function __construct(int $identifiant, string $content, string $createdAt, int $profil, int $question)
    {
        $this->identifiant = $identifiant;
        $this->content = $content;
        $this->createdAt = $createdAt;
        $this->profil = $profil;
        $this->question = $question;
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
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
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
     * @return int
     */
    public function getProfil(): int
    {
        return $this->profil;
    }

    /**
     * @param int $profil
     */
    public function setProfil(int $profil): void
    {
        $this->profil = $profil;
    }

    /**
     * @return int
     */
    public function getQuestion(): int
    {
        return $this->question;
    }

    /**
     * @param int $question
     */
    public function setQuestion(int $question): void
    {
        $this->question = $question;
    }

}