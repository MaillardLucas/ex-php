<?php
include 'connexion.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM actualites WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $auteur = $row['auteur'];
} else {
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
        <p>Auteur : <?php echo $auteur; ?></p>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
