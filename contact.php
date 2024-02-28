<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h1>Contactez-nous</h1>
        <form class="grid-contact-container" action="traitement_formulaire.php" method="post">
            <label for="prenom">Prénom :</label><br>
            <input type="text" id="prenom" name="prenom"><br>
            <label for="nom">Nom :</label><br>
            <input type="text" id="nom" name="nom"><br>
            <label for="email">Email :</label><br>
            <input type="email" id="email" name="email"><br><br>
            <input type="submit" value="Envoyer">
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>