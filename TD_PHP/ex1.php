<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ex1</title>
  <link rel="stylesheet" href="">
</head>
<body>
     <?php
        function carre($num){
            return $num * $num;
        }

        function afficheCarre1à30(){
            $i = 1;
            while($i <= 30){
                echo "<p>".$i."^2=".carre($i)."<p>";
                $i++;
            }
        }

        afficheCarre1à30();
?>

</body>
</html>