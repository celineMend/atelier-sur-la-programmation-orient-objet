<?php
interface Reparable{
    public function reparer(); 
}
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
class Moto extends Vehicule {
    private $marque;
    private $modele;
    private $type_moto;
    private $annee;
    
    public function __construct($marque, $modele, $type_moto, $annee) {
        parent::__construct("noir", "moto"); // Initialise la couleur et le type de la moto

        $this->marque = $marque;
        $this->modele = $modele;
        $this->type_moto = $type_moto;
        $this->annee = $annee;
    }

}
class Voiture extends Vehicule implements Reparable{
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
    echo "cette voiture est de manque $this->marque et corolla comme $this->modele la voiture à un $this->kilometrage de 100000 et a été créer cette $this->annee.";
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
public function reparer() {
    echo "la voiture n'a pas besoin de réparation.";
}

}
$Voiture1=new voiture("toyota", "modele","kilometrage","annee");
$Voiture1->demarrer();
$Voiture1->klaxonner();
$Voiture1->reparer();
$motoElectrique = new Moto("Noir", "Electrique", "600", 2020);
$motoElectrique->demarrer();
?>