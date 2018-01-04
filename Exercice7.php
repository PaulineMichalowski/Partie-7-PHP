<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 7</title>
    </head>
    <body>
        <?php
        // si le formulaire n'est pas vide
        $nameRegex = '/^[A-Z]{1}[a-z]+$/';
        if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && preg_match($nameRegex, $_POST['lastname']) && preg_match($nameRegex, $_POST['firstname'])) {
            echo strip_tags($_POST['gender']) . ' ' . strip_tags($_POST['lastname']) . ' ' . strip_tags($_POST['firstname']) . ' ' . $_FILES['picture']['name'];
            //sinon on affiche le formulaire
        } else {
            ?>
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <label for="gender">Civilité : </label>
                <select name="gender">
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
                <label for="lastname">Nom : </label><input type="text" name="lastname" />
                <label for="firstname">Prénom : </label><input type="text" name="firstname" />
                <label for="picture">Mon fichier : </label><input type="file" name="picture" />
                <input type="submit" value="Envoyer" />
            </form>
            <?php
        }
        ?>
    </body>
</html> 