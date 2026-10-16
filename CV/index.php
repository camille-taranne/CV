
<!DOCTYPE html>
<link rel="stylesheet" href="./css/style.css">
<html lang="fr">
    <meta charset="UTF-8">
    <head>
        <title>Mon CV</title>
    </head>
    <h2>Bienvenue sur mon CV</h2>

    <?php
    if ($_GET["page"] == "accueil") {
    include "pages/accueil.php";
    }
    if ($_GET["page"] == "presentation") {
    include "pages/presentation.php";
    }
    if ($_GET["page"] == "contact") {
    include "pages/contact.php";
    }
    ?>
    <nav>
        <a href="index.php?page=accueil">Accueil</a>
        <a href="index.php?page=presentation">Présentation</a>
        <a href="index.php?page=contact">Contact</a>
    </nav>


</html>