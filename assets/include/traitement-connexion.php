<?php
  include 'connexion.php';
  
    if(isset( $_POST['mail']) && isset( $_POST['mdp'])){
        $mail = $_POST['mail']; 
        $mdp = $_POST['mdp'];

         echo "<p>".$mail.",".$mdp."</p>";
            $sql = "SELECT * FROM users WHERE email_users = ? AND mdp_users = ?"; 
            $prepare = $db->prepare($sql);   
            $prepare ->execute(array($mail, $mdp));
            $result = $prepare->fetch();

    var_dump($mail, $mdp);
   
    if($mail == $result['email_users'] && $mdp == $result['mdp_users'] ){
        header("Location:../../connecter.php");
    }else{
        header("Location:../../identifier.php?id=erreur");
       
    }
}else{
    echo "rien";
}
?>