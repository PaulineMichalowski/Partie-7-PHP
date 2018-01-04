<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Partie7 ex4 user</title>
    </head>
    <body>
        <p>
            <?php
            //Création de la regex pour le nom et le prenom
            $nameregex = '/^[A-Z]{1}[a-z]+$/';
            //Si les champs sont remplis et qu'ils sont valides par rapport au regex
            if (!empty($_POST['lastnameForm']) && !empty($_POST['firstnameForm']) && preg_match($nameregex, $_POST['lastnameForm']) && preg_match($nameregex, $_POST['firstnameForm'])) {
                //alors on echo le resultat
                echo strip_tags($_POST['lastnameForm']) . ' ' . strip_tags($_POST['firstnameForm']);
                //sinon on affiche un message d'erreur
            } else {
                echo 'Merci de remplir les champs !';
            }
            ?>
        </p>
    </body>
</html>
