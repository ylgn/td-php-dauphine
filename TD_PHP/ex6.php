<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ex6</title>
</head>
<body>
    <form action="checkExercice6.php" method="POST" name="Inscription">
        <label>Nom : <input name="nom" type="text" size="30"></label>
        <br>
        <label>Prénom : <input name="prenom" type="text" size="30"></label>
        <br>
        <label>Adresse e-mail : <input name="email" type="text" size="30"></label>
        <br>
        <label>Date de naissance : <input name="dtn" type="date" size="30"></label>
        <br>
        <label>Mot de Passe : <input name="mdp" type="password" size="30"></label>
        <br>
        <label>Confirmation du mot de Passe : <input name="mdp_check" type="password" size="30"></label>
       <input type="submit" value="Connexion">
       <br>        
    </form>

</body>
</html>