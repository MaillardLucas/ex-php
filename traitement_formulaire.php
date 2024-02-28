<?php
include 'connexion.php';

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];

$query = "INSERT INTO contacts (prenom, nom, email) VALUES ('$prenom', '$nom', '$email')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Merci, votre message a été envoyé avec succès!";
} else {
    echo "Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer.";
}
?>