<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script>
    function showPopup(event) {
        event.preventDefault(); // Empêcher le comportement par défaut du formulaire
        alert("Vous avez réussi à vous enregistrer");
        window.location.href = "index.php"; // Redirection vers la page d'accueil après la validation
    }
</script>
<form action="traitement_formulaire.php" method="post" onsubmit="showPopup(event)">

</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h1>Contactez-nous</h1>
        <form action="traitement_formulaire.php" method="post" onsubmit="showPopup()">
            <div style="text-align: center;"> <!-- Centrer le formulaire -->
                <label for="prenom">Prénom :</label><br>
                <input type="text" id="prenom" name="prenom"><br>
                <label for="nom">Nom :</label><br>
                <input type="text" id="nom" name="nom"><br>
                <label for="email">Email :</label><br>
                <input type="email" id="email" name="email"><br><br>
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>