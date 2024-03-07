<?php
include 'connexion.php';
include 'ClasseContact.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contact = Contact::createFromFormData($_POST);

    $query = "INSERT INTO contacts (prenom, nom, email) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sss", $contact->prenom, $contact->nom, $contact->email);

    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Redirection vers index.php après l'envoi du contact
        header("Location: index.php");
        exit();
    } else {
        echo "Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer.";
    }
}
?>
