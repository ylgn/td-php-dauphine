<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ex3</title>
  <link rel="stylesheet" href="">
</head>
<body>
     <?php
        function afficherTableau($tab){
            for ($i=0 ; $i < count($tab) ; $i++ ) { 
                echo "<p>".$tab[$i]."<p>";
            }
        }

        function calculerMoyenneTableau($tab){
            $n = count($tab);
            $somme = 0;
            for ($i=0 ; $i < $n ; $i++ ) { 
                $somme += $tab[$i];
            }
            return $somme / $n ;
        }
        
        function nbElementsSup10Tableau($tab){
            $somme = 0;
            for ($i=0 ; $i < count($tab) ; $i++ ) { 
                if ($tab[$i]>=10) {
                    $somme += 1;
                }
            }
            return $somme ;
        }

        function is20presentDansTableau($tab){
            for ($i=0 ; $i < count($tab) ; $i++ ) { 
                if ($tab[$i] == 20) {
                    return true;
                }
            }
            return false ;
        }
        function getMeilleurNoteTableau($tab){
            $best = 0;
            for ($i=0 ; $i < count($tab) ; $i++ ) { 
                if ($tab[$i] > $best) {
                    $best = $tab[$i];
                }
            }
            return $best ;
        }
    ?>

</body>
</html>