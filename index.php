<?php
interface
class Vehicule {
    public $couleur;
    public $type;

    public function __construct($couleur, $type) {
        $this->couleur = $couleur;
        $this->type = $type;
    }

    public function demarrer() {
        echo "Ce véhicule de couleur $this->couleur et de type $this->type démarre.<br>";
    }
}
class Voiture extends Vehicule{
    //déclaration des propriétes public
    private $marque;
    private $modele;
    private $kilometrage;
    private $annee;

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
public function klaxonner() {
    echo " La voiture klaxonne: Beep beep!<br>";
}
function demarrer (){
    echo "cette voiture est de manque $this->marque et corolla comme $this->modele la voiture à un $this->kilometrage de 100000 et a été créer cette $this->annee";
 }

public function getModele() {
    return $this->modele;
}
public function setModele(){
    $this->modele=$v8;
}
public function getKilometrage(){
    return $this->kilometrage;
}
public function setKilometrage($kilometrage) {
    $this->kilometrage = $kilometrage;
}
Public function getAnnee(){
    return $this->modele ;
}
public function setAnnee($annee) {
    $this->annee = $annee;
}
 
}
$Voiture1=new voiture("toyota", "modele","kilometrage","annee");
$Voiture1->demarrer();
$Voiture1->klaxonner();
?>