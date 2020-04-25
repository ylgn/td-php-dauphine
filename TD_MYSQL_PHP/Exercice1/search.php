<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ex1 - Résultat Recherche</title>
</head>
<body>
    

   <?php
         include("connexion.php");
         $titre = $_POST['titre'];
         $auteur = $_POST['auteur'];
         $querry = getQuerry($titre,$auteur);
         if ($querry == false) {
             header('Location: recherche.php');
         }else{
            $prepared_querry = $connect->prepare($querry);
            $prepared_querry->execute();
            $resultat = $prepared_querry->fetchAll();
            
            print_r(resultToString($resultat));
         }
         function getQuerry($titre,$auteur){
            if ($titre != "" && $auteur != "") {
                $querry = "SELECT * FROM notice WHERE Titre LIKE '".$titre."' AND Auteur LIKE '".$auteur."'"; 
                return $querry;
            }elseif ($titre != "" && $auteur == ""){
                $querry = "SELECT * FROM notice WHERE Titre LIKE '".$titre."' ";
                return $querry;
            }
            elseif ($titre == "" && $auteur != ""){
                $querry = "SELECT * FROM notice WHERE Auteur LIKE '".$auteur."' ";
                return $querry;
            }
            return false;
         }

         function resultToString($array){
            $str = "<table><tr><th>Numéro de la notice</th><th>Titre</th><th>Type</th><th>Auteur</th></tr>";
            for ($i=0; $i < count($array); $i++) { 
                $id = $array[$i]['Id_notice'];
                $titre = $array[$i]['Titre'];
                $type = $array[$i]['Type'];
                $auteur = $array[$i]['Auteur'];
                $str = $str."<tr><td>".$id."</td><td>".$titre."</td><td>".$type."</td><td>".$auteur."</td>/<tr>";
            }
            $str = $str."</table>";
            return $str;
         }


   ?>

    
    

</body>
</html>