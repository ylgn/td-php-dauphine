<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ex4</title>
  <link rel="stylesheet" href="">
</head>
<body>
     <?php
    afficherTriangle(31);
    afficherTriangle(0);
    afficherTriangle(3);

        function afficherTriangle($taille){
            if ($taille == 0) {
                $taille = 20;
                dessinerTriangle($taille);
            }
            elseif ($taille > 30 ) {
                echo "<p>triangle trop grand</p>";
            }else{dessinerTriangle($taille);}
        }

        function dessinerTriangle($taille){
            $nbEtoiles =1;
            while ($taille >= $nbEtoiles) {
                for ($i=0; $i <$nbEtoiles ; $i++) { 
                    echo "*";
                }
                echo "<br>";
                $nbEtoiles++;
            }
        }

       

    ?>

</body>
</html>