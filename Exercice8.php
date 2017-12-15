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
    $infosfichier = pathinfo($_FILES['file']['name']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('pdf');
    if (in_array($extension_upload, $extensions_autorisees))
     {
       echo htmlspecialchars($_POST['gender'] . ' ' . $_POST['firstName']. ' ' .$_POST['lastName']. '. Le fichier envoyé est ' .$_FILES['file']['name']);
     }
     else{
       echo 'Ceci n\'est pas un pdf';
     }
}else{
    ?>
    <form method="post" action="Exercice8.php" enctype="multipart/form-data">
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