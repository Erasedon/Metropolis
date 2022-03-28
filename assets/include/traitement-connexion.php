<?php
        include 'connexion.php';
        
        if(isset( $_POST['mail']) && isset( $_POST['mdp'])){
                $mail = htmlspecialchars($_POST['mail']); 
                $mdp = htmlspecialchars($_POST['mdp']);

                    $sql = "SELECT * FROM users INNER JOIN avoir ON avoir.id_users = users.id_users
            INNER JOIN role ON role.id_role = avoir.id_role WHERE email_users = ?"; 
                    $prepare = $db->prepare($sql);   
                    $prepare ->execute(array($mail));
                      $result = $prepare->fetch();
                    $count = $prepare->rowCount();
                    if($count > 0){
                 
                   if($mail == $result['email_users'] && password_verify($mdp,$result['mdp_users'])){
                       session_start();
                       $_SESSION['role'] = $result['id_role'];
                       $_SESSION['mail'] = $result['email_users'];
                       $_SESSION['pseudo'] =  $result['pseudo_users'];
                       $_SESSION['mdp'] =  $result['mdp_users'];
                       header("Location:../../connecter.php");
                       
                    }
            }else{
                session_destroy(); 
                header("Location:../../identifier.php?id=erexistpas");
            }
        }else{
            header("Location:../../identifier.php?id=ncompris");
        }

?>