<?php

include_once 'index.php';
include_once 'voiture.php';

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
        echo "Cette $this->type est une marque : $this->marque,<br> le modèle est : $this->modele. <br> C'est une  : $this->type_moto. <br> On l'a fabriquée dans l'année : $this->annee fabriquée par : $this->fabriquant. Bien sûre la $this->type <br><br>";
    }
}
