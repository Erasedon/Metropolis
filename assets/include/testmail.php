<?php
         //Generate a random string.
         $token =openssl_random_pseudo_bytes(26);
      
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
       <p><a href='https://yanis.simplon-charleville.fr/Metropolis/assets/include/testmail.php?$token'> cliquer ici </a></p>
      </body>
     </html>
     ";

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';
     $headers[] = 'From: "Metropolis Simplon" <Metropolis.simplon@gmail.com> ';
     // En-têtes additionnels
   
     // Envoi
     mail($to, $subject, $message, implode("\r\n", $headers));
?>

<!-- <?php

    //Generate a random string.
    $token =openssl_random_pseudo_bytes(26);
      
    //Convert the binary data into hexadecimal representation.
    $token = bin2hex($token);
     
 
     //Print it out for example purposes.
     echo $token;

    
     $to      = 'yanis.pirlet@gmail.com';
     $subject = 'Le token';
     $message = $token;

     mail($to, $subject, $message, $headers);

     echo "le mail a bien été envoyé";

    
    
 ?> -->