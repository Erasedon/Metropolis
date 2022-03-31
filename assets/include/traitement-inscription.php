<?php
require_once ('../../vendor/autoload.php');

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;


  include ('connexion.php');



  if(isset( $_POST['mail']) && isset( $_POST['mdp']) && isset( $_POST['Pseudo'])){
    $Pseudo = htmlspecialchars($_POST['Pseudo']); 
    $mail =  htmlspecialchars($_POST['mail']); 
    $mdp =  htmlspecialchars($_POST['mdp']);

    $sql = "SELECT * FROM users WHERE email_users = :email_users";
    $prepare = $db->prepare($sql);   
    $prepare ->execute(array(':email_users' => $mail));    
    $count = $prepare->rowCount();

    if ( $count == 1) {
      while($result = $prepare->fetch()) {
        if($mail == $result['email_users']){
          header("Location:../../inscription.php?id=erreurexist");
        }
      }
    }
          
    if($count == 0){  
      //genere le token.
      $now = new \DateTime('now');
      $token = openssl_random_pseudo_bytes(26) . bin2hex($now->format('Y-m-d H:i:s'));
      // $token = openssl_random_pseudo_bytes(26);
      
      //Convert the binary data into hexadecimal representation.
      $token = bin2hex($token);
               
      // Plusieurs destinataires
      $to  = 'yayap08@gmail.com'; // notez la virgule
     
      // Sujet
      $subject = 'Metropolis etape de validation ';
    
     // message
      $message = "
      <html>
        <head>
        <title>Voici le mail de validation de votre compte</title>
        </head>
        <body>
        <H1>Felicitations voici l'étape final</H1>
        <p><a href='https://yanis.simplon-charleville.fr/Metropolis/assets/include/activation.php?C=$token'> cliquer ici </a></p>
        </body>
      </html>
      ";
  
      // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
      $headers[] = 'MIME-Version: 1.0';
      $headers[] = 'Content-type: text/html; charset=iso-8859-1';
      $headers[] = 'From: "Metropolis Simplon" <yanis.pirlet@gmail.com> ';
      // En-têtes additionnels
    


      // $phpMailer = new PHPMailer(true);
      $phpMailer = new PHPMailer();

      try {
          //Server settings

          $phpMailer->isSMTP();
          $phpMailer->Host = 'smtp.mailtrap.io';
          $phpMailer->SMTPAuth = true;
          $phpMailer->Port = 2525;
          $phpMailer->Username = 'ea62f21a6d878b';
          $phpMailer->Password = '9acf94fcde5827';

          // $phpMailer->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
          // $phpMailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      
          //Recipients
          $phpMailer->setFrom('from@example.com', 'Mailer');
          $phpMailer->addAddress($to, 'Joe User');     //Add a recipient
          // $phpMailer->addAddress('ellen@example.com');               //Name is optional
          // $phpMailer->addReplyTo('info@example.com', 'Information');
          // $phpMailer->addCC('cc@example.com');
          // $phpMailer->addBCC('bcc@example.com')1;
      
          //Attachments
          // $phpMailer->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
          // $phpMailer->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
      
          //Content
          $phpMailer->isHTML(true);                                  //Set email format to HTML
          $phpMailer->Subject = $subject;
          $phpMailer->Body    = $message;
          $phpMailer->AltBody = $message;
      
          $phpMailer->send();
      } catch (Exception $e) {
          die("Message could not be sent. Mailer Error: {$phpMailer->ErrorInfo}");
      }


      // // Envoi
      // $success = mail($to, $subject, $message, implode("\r\n", $headers));
      // if (!$success) {
      //     $errorMessage = error_get_last()['message'];
      //     die("Erreur envoi mail : " . $errorMessage);
      // }

      $mdp = password_hash( $mdp, PASSWORD_DEFAULT);
              
      $sql = "INSERT INTO users (pseudo_users, email_users, mdp_users,token_users,activation_users) VALUES (:pseudo_users, :email_users, :mdp_users,:token_users,:activation_users )"; 
      $prepare = $db->prepare($sql);   
      $prepare ->execute(array(':pseudo_users'=>$Pseudo, ':email_users' => $mail, ':mdp_users' => $mdp ,':token_users' => $token, ':activation_users' => '0' ));

      $count1 = $prepare->rowCount();  
        if($count1 >= 1){
          $sql1 = "SELECT * FROM users  WHERE email_users = :email_users";
          $prepare1 = $db->prepare($sql1);   
          $prepare1 ->execute(array(':email_users' => $mail)); 
          while($row = $prepare1->fetch()){
            $sql = "INSERT INTO avoir (id_users) VALUES (:id_users)"; 
            $prepare = $db->prepare($sql);   
            $prepare ->execute(array(':id_users'=>$row['id_users'])); 
  
          }
          header("Location: ../../inscription.php?id=succesinscrit");
        } else { 
          header("Location: ../../inscription.php?id=succesinscrit");
        }
    }
  } else {
    header("location: ../../inscription.php?id=erreurm");
  }
  


 

// $sql = "SELECT * FROM users WHERE email_users = ? and mdp_users = ?";
// $prepare = $db->prepare($sql);   
// $prepare ->execute([$mail, $mdp]);

// $result = $prepare->fetch();


?>