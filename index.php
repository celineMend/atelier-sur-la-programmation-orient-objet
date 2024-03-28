<?php
class Voiture{
    //déclaration des propriétes public
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
function demarrer (){
    echo "cette voiture est de manque $this->marque et V8 comme $this->modele la voiture à un $this->kilometrage de 100 et a été créer cette $this->annee";
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




//class Voiture extends vehicule {
   // public $couleur ;

//function demarrer __construct($marque, $modele ,$kilometrage ,$annee ;$couleur) {
    //$this->couleur = $couleur;
    
//}




//}



$Voiture1=new voiture("toyota", "modele","kilometrage","annee");
$Voiture1->demarrer();

?>