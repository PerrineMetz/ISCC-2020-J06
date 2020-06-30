<?php
 $nom_produit = "T-shirt femme";
 $couleur = "Rouge"; 
 $prix = "10.50"; 
 $disponible = "true";
 $quantite = "10";
 include ("affichage.php");
 include ("gestion-produit.php");
 
afficher_produit($nom_produit,$couleur,$prix,$disponible);
?>