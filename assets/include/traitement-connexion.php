<?php
  include 'connexion.php';
  
if(isset( $_POST['mail']) && isset( $_POST['mdp'])){
        $mail = htmlspecialchars($_POST['mail']); 
        $mdp = htmlspecialchars($_POST['mdp']);

            $sql = "SELECT * FROM users INNER JOIN avoir ON avoir.id_users = avoir.id_users
      INNER JOIN role ON role.id_role = avoir.id_role WHERE email_users = ? AND mdp_users = ?"; 
            $prepare = $db->prepare($sql);   
            $prepare ->execute(array($mail, $mdp));
            $result = $prepare->fetch();
                 
    
    if($mail == $result['email_users'] && $mdp == $result['mdp_users'] ){
        session_start();
        $_SESSION['role'] = $result['id_role'];
        header("Location:../../connecter.php");
        echo $result['id_role'];
    }else{
       unset($_SESSION['role']);
        header("Location:../../identifier.php?id=erconnexion");
    echo $result['id_role'];
    }
}else{
    header("Location:../../identifier.php?id=ercont");
}
?>