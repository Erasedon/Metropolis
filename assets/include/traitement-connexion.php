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
                $_SESSION['mail'] = $result['email_users'];
                $_SESSION['pseudo'] =  $result['pseudo_users'];
                $_SESSION['mdp'] =  $result['mdp_users'];
                header("Location:../../connecter.php");
            
            }else{
            destroy($_SESSION);
                header("Location:../../identifier.php?id=erconnexion");
            }
        }else{
            header("Location:../../connecter.php");
        }

?>