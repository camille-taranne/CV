<!DOCTYPE html>
<link rel="stylesheet" href="./css/style.css">
<html lang="fr">
    <meta charset="UTF-8">
    <head>
        <title>Mes Contacts</title>
    </head>
    <body>
        <h2>Contacts</h2>
        <p>téléphone : <a href ="tel:+33 7 68 50 57 88">+33 7 68 50 57 88</a><br>
            email : <a href ="mailto:tarannecamille@gmail.com">tarannecamille@gmail.com</a><br>
            adresse : 2 Rue Emile Courtin, Soizé <br>
            
        </p>

        <h2>Langues</h2>
        <?php 
        $c = "courrant";
        $l = "légèrement";
        echo "<p>Français (natale) : </p>". $c;
        echo "<p>Anglais : </p>". $c;
        echo "<p>Espagnol : </p>". $l;

        ?>
        
    </body>
</html>