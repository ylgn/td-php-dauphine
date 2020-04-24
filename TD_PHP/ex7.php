<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ex7</title>
</head>
<body>
    <H1>Session d'authentification</H1>
    <p>Veuillez entrer votre identifiant et votre mot de passe:</p>

    <form action="Session.php" method="POST" name="Inscription">
        <label>Identifiant : <input name="id" type="text" size="30"></label>
        <br>
        <label>Mot de passe : <input name="mdp" type="password" size="30"></label>
        <br>
       <input type="submit" value="Valider">
       <br>        
    </form>

</body>
</html>