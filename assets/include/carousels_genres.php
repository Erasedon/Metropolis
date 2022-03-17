<?php

require_once "connexion.php";

$envoim = $db->prepare("SELECT * FROM category");
$envoim->execute();



    while ($row = $envoim->fetch()){


            $nomcat = $row['nom_category'];
            $idCat = $row['id_category'];
        
            require "assets/include/carousel.php"; 
            
        }
 
?>