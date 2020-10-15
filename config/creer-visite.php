<?php
//Adresse IP
$Ip = $_SERVER['REMOTE_ADDR'] ;

//Recipération du nom de la page
$Page = $page;

//Appel de la fonction d'enregistrement d'une visite
creerVisite(
    $Ip,
    $Page
);
