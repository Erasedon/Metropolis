<?php
  include 'connexion.php';
  if(isset( $_POST['mail']) && isset( $_POST['mdp']) && isset( $_POST['Pseudo'])){
                $Pseudo = htmlspecialchars($_POST['Pseudo']); 
                $mail =  htmlspecialchars($_POST['mail']); 
                $mdp =  htmlspecialchars($_POST['mdp']);


                $sql = "SELECT * FROM users WHERE email_users = :email_users and mdp_users = :mdp_users";
                $prepare = $db->prepare($sql);   
                $prepare ->execute(array(
                  ':email_users' => $mail,
                  ':mdp_users' => $mdp
              ));  
                while ( $result = $prepare->fetch() ) {
                
                  echo "$result";
                     
                }

                   if($mail != $result['email_users']){
                    
                      $sql = "INSERT INTO users (pseudo_users, email_users, mdp_users) VALUES (:pseudo_users, :email_users, :mdp_users)"; 
                      $prepare = $db->prepare($sql);   
                      $prepare ->execute(array(
                        ':pseudo_users'=>$Pseudo,
                        ':email_users' => $mail,
                        ':mdp_users' => $mdp
                    )); 
                      $result = $prepare->fetchAll();
            
                   header("Location:../../inscription.php?id=succesinscrit"); 
                  }else{
                   header("Location:../../inscription.php?id=erreurexist");  
                  }

      
         
   }else{
    header("location:../../inscription.php?id=erreurm");

   }





// $sql = "SELECT * FROM users WHERE email_users = ? and mdp_users = ?";
// $prepare = $db->prepare($sql);   
// $prepare ->execute([$mail, $mdp]);

// $result = $prepare->fetch();

// var_dump($result);

?>