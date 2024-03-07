<?php
include 'connexion.php';
require_once('ClasseActualite.php');

$actualites = Actualite::getAllFromDatabase($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h1>Actualités</h1>
        <div class="news-container">
        <?php foreach($actualites as $actualite): ?>
            <div class="news-item">
                <h2><?php echo $actualite->titre; ?></h2>
                <img src="<?php echo $actualite->image_url; ?>">
                <p><?php echo $actualite->tags; ?></p>
                <a href="details.php?id=<?php echo $actualite->id; ?>">Lire la suite</a>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
