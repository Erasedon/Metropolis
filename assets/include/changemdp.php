<?php  
    include "connexion.php";

    $vieToken = 60; // Validité du token en minutes

    if(isset($_GET['reset'])){ 
        $token=$_GET['reset']; 
        $sql = "SELECT * FROM users WHERE tokenmdp_users = :tokenmdp_users";
        $prepare = $db->prepare($sql);   
        $prepare ->execute(array(':tokenmdp_users' => $token));    
        $count = $prepare->rowCount();

        if ( $count == 1) {  

            $dateToken = new \DateTime(hex2bin(substr(hex2bin($token), 26)));
            $now = new \DateTime('now');
            $interval = $dateToken->diff($now)->format('%i');
            // die(var_dump($interval->format('%i')));

            if($interval > $vieToken)
              header("Location:../../changementmdp.php");
            }else{ 
                
                header("Location:../../identifier.php?id=erchangmdp");
            }



    }



?>