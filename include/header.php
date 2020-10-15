<?php
  //Appel des fichiers de traitement

  require 'config/db.connexion.php'; //Connexion à la base de données
  require 'Model/model.php'; //Model
  require 'Controler/controler.php'; //Controleur

  require 'config/creer-visite.php'; //Fonction d'enregistrement des informations du visiteur à chaque visite
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Src/css/style.css">
  <title>MMPG Localisation</title>
</head>
<body>
<div id="loading"></div>

<div id="container">

  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="/"><h1>MMPG</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="info-localisation.php?localisation=casablanca">Casablanca</a></li>
            <li><a href="info-localisation.php?localisation=fes">Fès</a></li>
            <li><a href="info-localisation.php?localisation=rabat">Rabat</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin Header -->