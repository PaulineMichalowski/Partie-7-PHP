<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 6</title>
    </head>
    <body>
        <?php
        // si on envoie le formulaire
        $nameRegex = '/^[A-Z]{1}[a-z]+$/';
        if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['select']) && preg_match($nameRegex, $_POST['name']) && preg_match($nameRegex, $_POST['surname'])) {// si les input ne sont pas vides et existent
            ?>
            <p><?php
                echo 'Bonjour ' . strip_tags($_POST['select']) . ' ' . strip_tags($_POST['surname']) . ' ' . strip_tags($_POST['name']) . '.';
                ?>
            </p><?php
        } else {
            //sinon on affiche le formulaire
            ?>
            <form method="POST" action="index.php">
                <select class="form-control" id="select" name="select">
                    <option selected disabled>Choisissez votre civilité</option>
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
                <label for="surname">Nom</label><input type="text" name="surname" />
                <label for="name">Prénom</label><input type="text" name="name" />
                <input type="submit" name="submit" value="Valider" />
            </form>
            <?php
        }
        ?>
    </body>
</html>