<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 6</title>
</head>
<body>
  <?php
  if (isset($_GET['genre']) AND isset($_GET['firstName']) AND isset($_GET['lastName']))
  {
    echo htmlspecialchars($_GET['genre'] . ' ' . $_GET['firstName']. ' ' .$_GET['lastName']);
  }
  else{
    ?>
    <form method="get" action="Exercice6.php">
      <select name="genre">
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
      </select>
      <label for="firstName">Nom :</label><input type="text" name="firstName">
      <label for="lastName">Prénom :</label><input type="text" name="lastName">
      <input type="submit" value="valider">
    </form>
    <?php
  }
  ?>
</body>
</html>