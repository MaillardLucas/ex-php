<?php
include 'connexion.php';

$query = "SELECT * FROM actualites ORDER BY date_publication DESC LIMIT 5";
$result = mysqli_query($conn, $query);
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
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <div class="news-item">
                <img><?php echo $row['image_url'];?></img>
                <h2><?php echo $row['titre']; ?></h2>
                <p><?php echo $row['contenu']; ?></p>
                <a href="details.php?id=<?php echo $row['id']; ?>">Lire la suite</a>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>