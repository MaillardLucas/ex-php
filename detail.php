<?php
$id = $_GET['id'];
$query = "SELECT * FROM actualites WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'actualité</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <h1><?php echo $row['titre']; ?></h1>
    <p><?php echo $row['contenu']; ?></p>
    <?php include 'footer.php'; ?>
</body>
</html>