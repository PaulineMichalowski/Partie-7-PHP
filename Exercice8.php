<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 8</title>
    </head>
    <body>
        <?php
        // Je vérifie que les variables ont une valeurs
        $regexName = '/^[A-Z]{1}[a-z]+$/';
        if (isset($_POST['gender']) && isset($_POST['firstName']) && isset($_POST['lastName']) && preg_match($regexName, $_POST['firstName']) && preg_match($regexName, $_POST['lastName'])) {
            // J'affiche le contenu des variables
            echo strip_tags($_POST['gender']) . ' ' . strip_tags($_POST['firstName']) . ' ' . strip_tags($_POST['lastName']) . ' !';
            $infosfichier = pathinfo($_FILES['file']['name']);
            echo $_FILES['file']['name'];
            if ($infosfichier['extension'] == 'pdf') {
                echo 'C\'est bon.';
            }
        } else {
            ?>
            <!-- je créé mon formulaire avec la methode post et une action qui permet d'amener sur la page actuelle -->
            <form id="form" action="index.php" method="post" enctype="multipart/form-data">
                <label for="gender">Votre civilité ? </label>
                <select name="gender">
                    <option value="Monsieur">Mr</option>
                    <option value="Madame">Mme</otpion>
                    <option value="Autre">Autre</option>
                </select>
                <label for="lastName"> Nom : </label>
                <input type="text" name="lastName" />
                <label for="firstName"> Prénom : </label>
                <input type="text" name="firstName" />
                <!-- Je créer un bouton permetant la sélection du fichier à envoyer -->
                <label for="file">Votre fichier</label>
                <input type="file" name="file" />
                <input type="submit" value="Envoyer le fichier" />
            </form>
            <?php
        }
        ?>
    </body>
</html>