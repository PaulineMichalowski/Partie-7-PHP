<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Réponse au formulaire</title>
  </head>
  <body>
    <?php
    //On créer une variable pour la RegExp
    $nameregex ='/^[A-Z]{1}[a-z]+$/';
    //Vérification des champs
    if (!empty($_GET['name']) && !empty($_GET['surname']) && preg_match($nameregex, $_GET['name']) && preg_match($nameregex, $_GET['surname'])) {
      //Affichage des données GET
      echo strip_tags($_GET['name']) . ' ' . strip_tags($_GET['surname']);
    } else {
      //On affiche un message si les champs ne sont pas remplis correctement
      echo 'Merci de remplir correctement les champs.';
    } ?>
  </body>
</html>