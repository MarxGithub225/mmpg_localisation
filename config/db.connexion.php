<?php

    class Database{
        //Propriés de la base de données

        private $adresseServeurBaseDeDonnees="localhost";
        private $nomBaseDeDonnees="mmpg_localisation";
        private $utilisateurBaseDeDonnees="root";
        private $motDePasseBaseDeDonnees="";
        public $connexion;



        //Getter pour la connexion à la base de données

        public function getConnection(){
            // On commence par fermer la connexion si elle existait
            $this->connexion = null;

            // On essaie de se connecter
            try{
                $this->connexion = new PDO("mysql:host=" . $this->adresseServeurBaseDeDonnees . ";dbname=" . $this->nomBaseDeDonnees, $this->utilisateurBaseDeDonnees, $this->motDePasseBaseDeDonnees);
            }catch(PDOException $exception){ // On gère les erreurs éventuelles
                echo "Erreur de connexion : " . $exception->getMessage();
            }

            // On retourne la connexion
            return $this->connexion;
        }   
    }