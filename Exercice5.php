<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 5</title>
    </head>
    <body>
        <form method="post" action="Exercice5.php">
            <select name="gender">
                <option value="Monsieur">Monsieur</option>
                <option value="Madame">Madame</option>
            </select>
            <label for="firstName">Nom :</label><input type="text" name="firstName">
            <label for="lastName">Prénom :</label><input type="text" name="lastName">
            <input type="submit" value="Valider">
        </form>
        <?php
        if (isset($_POST['gender']) AND isset($_POST['firstName']) AND isset($_POST['lastName'])) {
            echo htmlspecialchars($_POST['gender'] . ' ' . $_POST['firstName'] . ' ' . $_POST['lastName']);
        }
        ?>
    </body>
</html>