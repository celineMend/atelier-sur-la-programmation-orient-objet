
<?php

include_once 'voiture.php';
include_once  'moto.php';




$moto = new Moto("","","","","","");
$moto->setMarque("Honda");
$moto->setModele("203ph");
$moto->setType_moto("Moto électrique");
$moto->setAnnee(2022);
$moto->setFabriquant("Japon");
$moto->setType("Moto");
$moto->Afficher();
$moto->Demarrer();

$voiture = new Voiture("","","","","","");
$voiture->setMarque("Toyota");
$voiture->setModele("Rav4");
$voiture->setKilometrage(23);
$voiture->setAnnee(2022);
$voiture->setFabriquant("Chinois");
$voiture->setType("Voiture");
$voiture->Afficher();
$voiture->klaxonner();
$voiture->reparer();

