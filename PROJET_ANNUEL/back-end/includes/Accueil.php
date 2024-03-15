<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back Office - Accueil</title>
    <link href="css/bootstrap-5.3.3-dist/bootstrap.min.css" rel="stylesheet">
    <link href="css/material-dashboard-master/assets/css/material-dashboard.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<?php include_once("includes/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Bienvenue sur Amimal.org</h1>
            <ul>
                <li><a href="gestion_articles.php">Gestion des articles</a></li>
                <li><a href="gestion_utilisateurs.php">Gestion des utilisateurs</a></li>
                <li><a href="gestion_photos.php">Gestion des photos</a></li>
                <li><a href="gestion_animaux.php">Gestion des categories d'animaux</a></li>
                <li><a href="gestion_bdd.php">gestion des beses de donnees</a></li>
                <li><a href="gestion_captcha.php">gestion du captcha</a></li>
                <li><a href="gestion_newsletter.php">gestion de la newsletter</a></li>
                <li><a href="statistiques.php">Statistiques</a></li>
            </ul>
        </div>
    </div>
</div>

<?php include_once("includes/footer.php"); ?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="css/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
<script src="css/material-dashboard-master/assets/js/material-dashboard.min.js"></script>
</body>
</html>
