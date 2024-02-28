<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base_de_donnees = "exercice_php";

$conn = mysqli_connect($serveur, $utilisateur, $motdepasse, $base_de_donnees);

if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}
?>