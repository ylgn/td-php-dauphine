<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ex5</title>
  <link rel="stylesheet" href="ex5.css">
</head>
<body>
     <?php
    $array = array(1,2,3,4,5,6,7,8,9);
    afficherMatrice($array);

    function afficherMatrice($array){
        echo "<table>";
        for ($i=0; $i < count($array) ; $i++) { 
            echo "<tr>";
            if ($array[$i]==1) {
                echo "<th>#</th>";               
            }else{
                echo "<th>".$array[$i]."</th>"; 
            }
           for ($j=1; $j <count($array) ; $j++) { 
            if ($array[$i]==1) {
                echo "<th>".$array[$j]."</th>";               
            }else{
                echo "<td ".isPaire($array[$i]).">".$array[$j]*$array[$i]."</td>";  
            }
           }
           echo "</tr>";
        }
        echo "</table>";
        
    }  
    
    function isPaire($nb){
        if ($nb % 2 == 0) {
            return "class = 'pair'";
        }
    return "class = 'impair'";
    }  
    ?>

</body>
</html>