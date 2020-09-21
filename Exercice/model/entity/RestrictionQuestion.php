<?php

class RestrictionQuestion
{
    private int $question;
    private int $profil;

    /**
     * RestrictionQuestion constructor.
     * @param int $question
     * @param int $profil
     */
    public function __construct(int $question, int $profil)
    {
        $this->question = $question;
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

}