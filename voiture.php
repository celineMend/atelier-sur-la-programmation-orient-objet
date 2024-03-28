<?php 

include_once "index.php";
include_once "vehicule.php";



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
