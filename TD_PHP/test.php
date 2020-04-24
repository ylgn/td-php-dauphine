<?php    
    function checkAge($dtn) {
        $from = new DateTime($dtn);
        $to   = new DateTime('today');
        $age = $from->diff($to)->y;
       
        if ($age >=15 && $age <=90) {
            return true;
        }
        return false;
    }

   
?>