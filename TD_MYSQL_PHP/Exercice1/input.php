<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ex1</title>
</head>
<body>
    

   <?php
         include("connexion.php");
         $titre = $_POST['titre'];
         $notice = $_POST['type'];
         $auteur = $_POST['auteur'];
         $querry = "INSERT INTO notice (Id_notice, Titre, Type, Auteur) VALUES (NULL, '".$titre."', '".$notice."', '".$auteur."')";
         $connect->exec($querry);
         echo "votre notice dont le titre est ".$titre." et l’auteur ".$auteur." a été saisie.";
   ?>

    
    

</body>
</html>