<?php
  include 'connexion.php';
  
if(isset( $_POST['mail']) && isset( $_POST['mdp'])){
        $mail = htmlspecialchars($_POST['mail']); 
        $mdp = htmlspecialchars($_POST['mdp']);

            $sql = "SELECT * FROM users WHERE email_users = ? AND mdp_users = ?"; 
            $prepare = $db->prepare($sql);   
            $prepare ->execute(array($mail, $mdp));
            $result = $prepare->fetch();
           
   
    if($mail == $result['email_users'] && $mdp == $result['mdp_users'] ){
        session_start();
        $_SESSION['role'] = $result['id_users'];
        header("Location:../../connecter.php");
    }else{
        header("Location:../../identifier.php?id=erconnexion");
       
    }
}else{
    header("Location:../../identifier.php?id=ercont");
}
?>