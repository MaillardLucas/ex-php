<?php
// Inclure la connexion à la base de données
include 'connexion.php';

// Vérifier si un ID d'actualité a été transmis via l'URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les détails de l'actualité sélectionnée
    $query = "SELECT * FROM actualites WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    // Récupérer le nom et prénom de l'auteur
    $auteur = $row['auteur'];
} else {
    // Rediriger si aucun ID n'est fourni dans l'URL
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'actualité</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h1><?php echo $row['titre']; ?></h1>
        <img src="<?php echo $row['image_url'];?>" alt="">
        <p><?php echo $row['contenu']; ?></p>
        <!-- Afficher le nom et prénom de l'auteur -->
        <p>Auteur : <?php echo $auteur; ?></p>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
