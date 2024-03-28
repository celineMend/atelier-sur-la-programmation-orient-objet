<?php
class Voiture{
    public $marque;
    public $modele;
    public $kilometrage;
    public $annee;

    public function __construct($marque, $modele ,$kilometrage ,$annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometrage = $kilometrage;
        $this->annee = $annee;
    }
public function getMarque() {
    return $this->marque;
}
public function setMarque($toyota) {
    $this->marque =$toyota ;
}
function démarer (){
    echo "je m'appelle $this->marque ";
 }
 
}
$Voiture1=new voiture("toyota", "modele","kilometrage","annee");
$Voiture1->démarer();
?>