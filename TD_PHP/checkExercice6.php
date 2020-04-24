

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ex6</title>
</head>
<body>
   <?php

    $arrayUser = array();
    $nom = $_POST [ 'nom' ];
    $prenom = $_POST [ 'prenom' ];
    $date_de_naissance = $_POST [ 'dtn' ];
    $email = $_POST [ 'email' ];
    $mdp = $_POST [ 'mdp' ];
    $mdpTest = $_POST [ 'mdp_check' ];
    $testusr = userFactory('test','test','2020-05-20','test@test.fr','mdp');
    array_push($arrayUser,$testusr);

    if (checkFull($nom,$prenom,$date_de_naissance,$email,$mdp,$mdpTest) &&
        checkEmail($email) &&
        !checkUserExist($email,$arrayUser) &&
        checkAge($date_de_naissance) &&
        checkMdp($mdp,$mdpTest)
    ){  
        $usr = userFactory($nom,$prenom,$date_de_naissance,$email,$mdp);
        array_push($arrayUser,$usr);
        $usr->display();
    }else {
       header('Location: ex6.php');

    }
    class Utilisateur {
        public $nom ="";
        public $prenom = "";
        public $email = "";
        public $date_de_naissance;
        public $mot_de_passe ="";   
   
        public function setNom($nom){
            $this->nom = $nom;
        }

        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        public function setDateDeNaissance($dtn){
            $this->date_de_naissance = $dtn;
        }

        public function setEmail($email){
            $this->email = $email;
        }
        
        public function setMdp($mdp){
            $this->mot_de_passe = $mdp;
        }
    
        public function display(){
            echo "<p>".$this->nom ."</p>";
            echo "<p>".$this->prenom."</p>";
            echo "<p>".$this->email."</p>";
            echo "<p>".$this->date_de_naissance."</p>";
        }
} 

 function isFieldEmpty($var){
     if ($var == "") {
         return true;
     }return false;
 }

 function checkFull($nom,$prenom,$date_de_naissance,$email,$mdp,$mdpTest){
    if (!isFieldEmpty($nom) && !isFieldEmpty($prenom) 
        && !isFieldEmpty($date_de_naissance) && !isFieldEmpty($email)
        && !isFieldEmpty($mdp) && !isFieldEmpty($mdpTest)) {
        return true;
    }return false;
}


function checkUserExist($email,$arrayUser){
    for ($i=0; $i < count($arrayUser) ; $i++) { 
        if ($arrayUser[$i]->email == $email) {
           return true;
        }
    }return false;
}

 function checkMdp($mdp, $mdpTest) {
    if ($mdp == $mdpTest) {
        return true;
    }else {
        return false;
    }
}
function checkEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
      }return true;
}

function checkAge($dtn) {
    $from = new DateTime($dtn);
    $to   = new DateTime('today');
    $age = $from->diff($to)->y;
   
    if ($age >=15 && $age <=90) {
        return true;
    }
    return false;
}

function userFactory($nom,$prenom,$date_de_naissance,$email,$mdp){
    $usr = new Utilisateur;
    $usr->setNom($nom);
    $usr->setPrenom($prenom);
    $usr->setDateDeNaissance($date_de_naissance);
    $usr->setEmail($email);
    $usr->setMdp($mdp);
    return $usr;
}
    ?>   
</body>
</html>