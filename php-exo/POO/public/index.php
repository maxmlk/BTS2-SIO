<?php

require_once '../Autoloader.php';

use App\Model\{Chien,Chat};
use App\Model\Homme;

//Création du chien
$chien = new Chien('Luffy');

$chien->setAge(3);
$chien->setTaille(47.68);
$chien->setPoids(35.12);

//Création du chat
$chat = new Chat('Wiscats', true);

$chat->setAge(7);
$chat->setTaille(22.59);
$chat->setPoids(11.25);

//Création de l'humain
$humain = new Homme('Hugo', 19);

$humain->setTaille(187);
$humain->setPoids(80);


//Affichage du chien
echo $chien->sePresente().'</br>';
echo $chien->aboie(3).'</br>';
echo $chien->getQteManger(189).'</br>';
echo $chien->getQteBu(6).'</br>';

echo ('</br></br>');

//Affichage du chat
echo $chat->sePresente().'</br>';
echo $chat->miaule(7).'</br>';
echo $chat->isChasseur().'</br>';
echo $chat->getQteManger(54).'</br>';
echo $chat->getQteBu(3).'</br>';

echo ('</br></br>');

//Affichage de l'humain
echo $humain->sePresente().'</br>';
echo $chat->getQteManger(154).'</br>';
echo $chat->getQteBu(2.4).'</br>';