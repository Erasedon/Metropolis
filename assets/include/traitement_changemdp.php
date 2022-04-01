<?php
require_once ('../../vendor/autoload.php');

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;

  include ('connexion.php');


  if(isset($_GET['reset'])){ 
      $token=$_GET['reset']; 
            if(isset( $_POST['mdp'])){
                $mdp =  htmlspecialchars($_POST['mdp']);
                $mdp = password_hash( $mdp, PASSWORD_DEFAULT);

                $sql = "UPDATE users SET mdp_users= :mdp_users WHERE  tokenmdp_users = :tokenmdp_users";
                        $prepare = $db->prepare($sql);   
                        $prepare ->execute(array(':mdp_users' => $mdp,
                            ':tokenmdp_users' => $token));    
                
                    
                
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
                    $message = '
                   
                    <!doctype html>
                    <html>
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                    </head>
                    <body style="font-family: sans-serif;">
                        <div style="display: block; margin: auto; max-width: 600px;" class="main">
                        <h1 style="font-size: 18px; font-weight: bold; margin-top: 20px">Congrats for sending test email with Mailtrap!</h1>
                        <p>Inspect it using the tabs you see above and learn how this email can be improved.</p>
                        <img alt="Inspect with Tabs" src="assets\img\logo prope.jpg" style="width: 100%;">
                        <p>Now send your email using our fake SMTP server and integration of your choice!</p>
                        <p>Good luck! Hope it works.</p>  <p><a href="http://localhost/Metropolis/connecter.php"> Connectez vous </a></p>
                        </div>
                        <!-- Example of invalid for email html/css, will be detected by Mailtrap: -->
                        <style>
                        .main { background-color: white; }
                        a:hover { border-left-width: 1em; min-height: 2em; }
                        </style>
                    </body>
                    </html>
                  
                    ';

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
                    header('location:../../changementmdp.php?id=envoimail');
                }
            }

            // // Envoi
            // $success = mail($to, $subject, $message, implode("\r\n", $headers));
            // if (!$success) {
            //     $errorMessage = error_get_last()['message'];
            //     die("Erreur envoi mail : " . $errorMessage);
            // }

                    

?>