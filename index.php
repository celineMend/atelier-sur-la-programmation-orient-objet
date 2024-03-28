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
class Vehicule {
    public $couleur ;
    public $type;

    public function __construct($couleur, $type) {
        $this->couleur = $couleur;
        $this->type = $type;
}
Public function getCouleur(){
        return $this->couleur ;
}
public function setCouleur($couleur) {
        $this->couleur = $Couleur;
}
Public function getType(){
    return $this->type ;
}
public function setType($type) {
    $this->type = $type;
}
function demarrer (){
    echo "cette vehicule est de $this->couleur et de $this->type voiture.";
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