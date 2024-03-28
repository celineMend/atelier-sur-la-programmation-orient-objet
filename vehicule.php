<?php
include_once "index.php";

class Vehicule {
    public $type;
    public $fabriquant;

    public function Demarrer(){
        echo "émarre bien";
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

