<?php

/**Fonction d'Enregistrement d'une visite*/
function creerVisite(
    $Ip,
    $Page
){
    // On instancie la base de données
    $database = new Database();
    $db = $database->getConnection();
    $visite = new Visite($db);

    $Date = date('Y-m-d H:i:s');
    $visite->setIp($Ip);
    $visite->setPage($Page);
    $visite->setDate($Date);

    return $visite->creerVisite();
}

/**Fonction d'Enregistrement d'une visite*/
function recupererVisitesDunePage(
    $Page
){
    // On instancie la base de données
    $database = new Database();
    $db = $database->getConnection();
    $visite = new Visite($db);

    $visite->setPage($Page);

    $resultat = $visite->recupererVisitesDunePage();

    return $resultat->rowCount();
}