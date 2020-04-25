<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ex1 - Ajout</title>
</head>
<body>
    <form action="search.php" method="POST" name="Inscription">
        <label>Titre : <input name="titre" type="text" size="30"></label>
        <br>
        <label>Auteur : <input name="auteur" type="text" size="30"></label>
        <br>
       <input type="submit" value="Ajouter">
       <br>        
    </form>
    <?php
        include("connexion.php");
    ?>

</body>
</html>