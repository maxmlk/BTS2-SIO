<?php

require_once ('entity\Category.php');

//Création des categories
for ($i = 1; $i <= 10; $i++ )
{
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $category = new Category($i, substr(str_shuffle($permitted_chars), 1, rand(5,16)));
    echo 'La catégorie à pour identifiant '. $category->getIdentifiant() . ' et pour libelle '. $category->getLibelle();
    echo '</br>';
}
