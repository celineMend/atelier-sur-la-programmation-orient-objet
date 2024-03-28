<?php

class Vehicule {
    public $type;
    public $fabriquant;

    public function Demarrer(){
        return "Oui, ça démarre bien";
    }

    public function __construct($type, $fabriquant){
        $this->type = $type;
        $this->fabriquant = $fabriquant;
    }

    public function setType($nouveau_type){
        if ($nouveau_type){
            $this->type = $nouveau_type;
        }
    }

    public function setFabriquant($nouveau_Fabriquant){
        if ($nouveau_Fabriquant){
            $this->fabriquant = $nouveau_Fabriquant;
        }
    }

    public function getType(){
        return $this->type;
    }

    public function getFabriquant(){
        return $this->fabriquant;
    }
}

interface Reparable {
    public function reparer();
} 

class Voiture extends Vehicule implements Reparable {
    private $marque;
    private $modele;
    private $kilometrage;
    private $annee;

    public function __construct($nouveau_marque, $nouveau_modele, $nouveau_kilometrage, $nouveau_annee, $type, $fabriquant){
        parent::__construct($type, $fabriquant);
        $this->marque = $nouveau_marque;
        $this->modele = $nouveau_modele;
        $this->kilometrage = $nouveau_kilometrage;
        $this->annee = $nouveau_annee;
    }

    public function getMarque(){
        return $this->marque;
    }

    public function getModele(){
        return $this->modele;
    }

    public function getKilometrage(){
        return $this->kilometrage;
    }

    public function getAnnee(){
        return $this->annee;
    }

    public function setMarque($nouveau_marque){
        if(is_string($nouveau_marque)){
            $this->marque = $nouveau_marque;
        }
    }

    public function setModele($nouveau_modele){
        if(is_string($nouveau_modele)){
            $this->modele = $nouveau_modele;
        }
    }

    public function setKilometrage($nouveau_kilometrage){
        if($nouveau_kilometrage){
            $this->kilometrage = $nouveau_kilometrage;
        }
    }

    public function setAnnee($nouveau_annee){
        if($nouveau_annee){
            $this->annee = $nouveau_annee;
        }
    }
    
    public function Afficher(){
        echo "Cette $this->type est une marque : $this->marque,<br> le modèle est : $this->modele. <br> Il a un kilométrage de : $this->kilometrage. <br> On l'a fabriqué dans l'année : $this->annee fabriqué par : $this->fabriquant <br><br><br>";
    }

    public function klaxonner(){
        echo "PIIIIP piip piiiiiippp <br>";
    }

    public function reparer(){
        echo "La voiture n'a pas besoin de réparation <br>";
    }
}

class Moto extends Vehicule {
    private $modele;
    private $marque;
    private $type_moto;
    private $annee;

    public function __construct($nouveau_marque, $nouveau_modele, $nouveau_type_moto, $nouveau_annee, $type, $fabriquant){
        parent::__construct($type, $fabriquant);
        $this->marque = $nouveau_marque;
        $this->modele = $nouveau_modele;
        $this->type_moto = $nouveau_type_moto;
        $this->annee = $nouveau_annee;
    }

    public function getMarque(){
        return $this->marque;
    }

    public function getModele(){
        return $this->modele;
    }

    public function getType_moto(){
        return $this->type_moto;
    }

    public function getAnnee(){
        return $this->annee;
    }

    public function setMarque($nouveau_marque){
        if(is_string($nouveau_marque)){
            $this->marque = $nouveau_marque;
        }
    }

    public function setModele($nouveau_modele){
        if(is_string($nouveau_modele)){
            $this->modele = $nouveau_modele;
        }
    }

    public function setType_moto($nouveau_type_moto){
        if($nouveau_type_moto){
            $this->type_moto = $nouveau_type_moto;
        }
    }

    public function setAnnee($nouveau_annee){
        if($nouveau_annee){
            $this->annee = $nouveau_annee;
        }
    }
    
    public function Afficher(){
        echo "Cette moto est une marque : $this->marque,<br> le modèle est : $this->modele. <br> C'est une  : $this->type_moto. <br> On l'a fabriquée dans l'année : $this->annee fabriquée par : $this->fabriquant <br><br><br>";
    }
}

$moto = new Moto("","","","","","");
$moto->setMarque("Honda");
$moto->setModele("203ph");
$moto->setType_moto("Moto électrique");
$moto->setAnnee(2022);
$moto->Afficher();

$voiture = new Voiture("","","","","","");
$voiture->setMarque("Toyota");
$voiture->setModele("Rav4");
$voiture->setKilometrage(23);
$voiture->setAnnee(2022);
$voiture->Afficher();
$voiture->klaxonner();
$voiture->reparer();

