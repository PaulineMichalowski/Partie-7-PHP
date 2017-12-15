<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 7</title>
</head>
<body>
  <?php
  if (isset($_POST['gender']) AND isset($_POST['firstName']) AND isset($_POST['lastName']) AND isset($_FILES['file']))
  {
       echo htmlspecialchars($_POST['gender'] . ' ' . $_POST['firstName']. ' ' .$_POST['lastName']. '. Le fichier envoyé est ' .$_FILES['file']['name']);
  }else{
    ?>
    <form method="post" action="Exercice7.php" enctype="multipart/form-data">
      <select name="gender">
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
      </select>
      <label for="firstName">Nom :</label><input type="text" name="firstName">
      <label for="lastName">Prénom :</label><input type="text" name="lastName">
      <label for="file">Votre fichier :</label><input type="file" name="file">
      <input type="submit" value="valider">
    </form>
    <?php
  }
  ?>
</body>
</html>