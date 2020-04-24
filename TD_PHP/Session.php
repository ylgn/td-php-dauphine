

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ex7</title>
</head>
<body>
   <?php
   
   $compteTest = new Compte;
   $compteTest->setID('test');
   $compteTest->setMDP('test');
   $id = $_POST['id'];
   $mdp = $_POST['mdp'];
   connexion($id,$mdp,$compteTest);
   
   
   class Compte {
        private $id ="";
        private $mdp = "";
        
        public function setID($id){
            $this->id = $id;
        }
        public function getID(){
            return $this->id;
        }
        public function setMDP($mdp){
            $this->mdp = $mdp;
        }
        public function getMDP(){
            return $this->mdp;
        }
    }

    function connexion($id,$mdp,$compteTest){
        if ($id == $compteTest->getID() && $mdp == $compteTest->getMDP()) {
            echo "Connexion Réussie";
        }else{
            echo "Mot de passe ou identifiant incorrect";
        }
    }



 ?>   
</body>
</html>