<html>
    <body>
<?php
$nom_produit= "T-shirt femme";
$couleur= "Rouge";
$prix= "15.50";
$disponible="true";
$quantite= "10";
$cout=$prix*3;
$couttotal=$prix*$quantite;

include ("affichage.php");
include ("gestion-produit.php");
?>