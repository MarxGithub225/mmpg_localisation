<?php

    class Visite{
        
        private $connexion;// Connexion
        private $table = "visiteurs"; // Table dans la base de données

        //Propriétéss 
        public $Id;
        public $Ip;
        public $Page;
        public $Date;
        


        //LES SETTERS DES PROPRIETES

         /**
         * Set the value of Id
         *
         * @return  self
         */ 
        public function setId($Id)
        {
                $this->Id = $Id;

                return $this;
        }

        /**
         * Set the value of Ip
         *
         * @return  self
         */ 
        public function setIp($Ip)
        {
                $this->Ip = $Ip;

                return $this;
        }

        /**
         * Set the value of Page
         *
         * @return  self
         */ 
        public function setPage($Page)
        {
                $this->Page = $Page;

                return $this;
        }

        /**
         * Set the value of Date
         *
         * @return  self
         */ 
        public function setDate($Date)
        {
                $this->Date = $Date;

                return $this;
        }

        /**
         * Constructeur avec $db pour la connexion à la base de données
         *
         * @param $db
         */
        public function __construct($db){
            $this->connexion = $db;
        }

        //Enregistrer une visite

        public function creerVisite(){
            $q="INSERT INTO $this->table VALUES (null,:Ip,:Page,:Date)";
            $resultats=$this->connexion->prepare($q);
            $resultats->execute(
                            array(
                            ':Ip'=>$this->Ip,
                            ':Page'=>$this->Page,
                            ':Date'=>$this->Date
                            )
                    );

            return $resultats;
        }


        //Récupérer les visites en fonction d'une page

        public function recupererVisitesDunePage(){
            $q="SELECT * FROM $this->table WHERE Page=:Page";
            $resultats=$this->connexion->prepare($q);
            $resultats->execute(
                            array(
                            ':Page'=>$this->Page
                            )
                    );

            return $resultats;
        }

    }