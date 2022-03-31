<?php
require_once ('../../vendor/autoload.php');

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;


  include ('connexion.php');



  if(isset( $_POST['mail'])){   
    $mail =  htmlspecialchars($_POST['mail']); 
    $sql = "SELECT * FROM users WHERE email_users = :email_users";
    $prepare = $db->prepare($sql);   
    $prepare ->execute(array(':email_users' => $mail));    
    $count = $prepare->rowCount();

    if ( $count == 1) {
        //genere le token.
        $now = new \DateTime('now');
        $token = openssl_random_pseudo_bytes(26) . bin2hex($now->format('Y-m-d H:i:s'));
        // $token = openssl_random_pseudo_bytes(26);
        
        //Convert the binary data into hexadecimal representation.
        $token = bin2hex($token);
        
      // Plusieurs destinataires
      $to  = 'yayap08@gmail.com'; // notez la virgule
      
      // Sujet
      $subject = 'Metropolis Réinitialiser votre Mot de passe ';
      
      // message
      $message = "
      <html>
      <head>
      <title>Metropolis</title>
      </head>
      <body>
      <H1>Voici l\' étape pour réinitialiser votre Mot de passe</H1>
      <p><a href='http://localhost/Metropolis/assets/include/changemdp.php?reset=$token'> cliquer ici </a></p>
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
          $phpMailer->setFrom('yanis.pirlet@gmail.com', 'Mailer');
          $phpMailer->addAddress($to, 'EnvoieYP');     //Add a recipient
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
       
        $sql = "UPDATE users SET tokenmdp_users = :tokenmdp_users WHERE email_users= :email_users";
        $prepare = $db->prepare($sql);   
        $prepare ->execute(array(':email_users' => $mail,
            ':tokenmdp_users' => $token));
            header("Location:../../identifier.php?id=demm");
       
    }else{  
           header("Location:../../reset.php?id=erreurexist");
    }
    
}

// // Envoi
// $success = mail($to, $subject, $message, implode("\r\n", $headers));
// if (!$success) {
    //     $errorMessage = error_get_last()['message'];
    //     die("Erreur envoi mail : " . $errorMessage);
    // }