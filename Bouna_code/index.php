<?php

class vehicule {
    public $type;
    public $fabriquant;


    public  function Demarrer(){
        return ("Oui, ca demarre bien");
    }
    public  function __construct($type, $fabriquant){
        $this->type = $type;
        $this->fabriquant = $fabriquant;

    }

}
$vehicule = new Vehicule("voiture", "BMW_FRANCE");


class voiture extends vehicule{
    private $marque;
    private $modele;
    private $kilometrage;
    private $annee;

    public function __construct( $marque,  $modele, $kilometrage, $annee,$type,$fabriquant){
     parent::__construct($type,$fabriquant);
            $this->marque = $marque;
            $this->modele = $modele;
            $this->kilometrage =$kilometrage;
            $this->annee = $annee;
        }
        public function setMarque(){
            return $this->marque;
        }
        public function setModele($modele){
            return $this->modele;
        }
        public function setKilometrage($kilometrage){
            return $this->kilometrage;
        }
        public function setAnnee($annee){
            return $this->annee;
        }
    
        public function Afficher(){
           var_dump("Cette $this->type est une marque : $this->marque,<br> le modele est : $this->modele. <br> Il a un kilométrage de : $this->kilometrage. <br> on l'a fabriquer dans l'année : $this->annee fabriquer par : $this->fabriquant");
        }
        public function klaxonner(){
            echo ("PIIIIP piip piiiiiippp");
        }
    }
 


$voiture = new Voiture("BMW","I4 G26",234, 2021,"Voiture","BWM_FRANCE"); 
$voiture->Afficher();
$voiture->klaxonner();


$voiture->setKilometrage(302);