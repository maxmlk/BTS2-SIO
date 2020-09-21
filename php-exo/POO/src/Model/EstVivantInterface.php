<?php

namespace App\Model;

interface EstVivantInterface
{
    /**
     * @param int $qte
     */
	public function getQteManger();
    /**
     * @param int $qte
     */
	public function getQteBu();
    /**
     * @return int
     */
	public function getAge();
    /**
     * @param int $age
     */
	public function setAge();
    /**
     * @return string
     */
	public function getNom();
    /**
     * @param string $nom
     */
	public function setNom();
}