<?php
 include "connexion.php";
    $getid = $_GET['id'];

    $filmaff = $db->prepare("SELECT * FROM audiovisuel WHERE id_visuel = :getid");
    $filmaff->execute(array(
        ':getid' => $getid
    ));
    $result = $filmaff->fetch();
    $titre= $result['titre_visuel'];
    $synonyme=$result['synonyme_visuel'];
    $type =$result['type_visuel'];
    $bande =$result['bande_visuel'];

?>

<div class="separator"></div>
<section id=5 class="position">
    <div class="dispositionvideotext">  <p class=titrefilm><?php echo $titre?></p>
        <div class="containervideotext">
      
            <video autoplay controls loop preload="metadata" class="taillefilm">
                <source src="<?php echo $bande?>" type="video/mp4">
            </video>
        </div>
        <!-- <div class="filmcontainer">
            <p class=titrefilm><?php echo $titre?></p>
            <p class="justfilmtext">
            <?php echo $synonyme;   ?> <br>
            <?php  echo $type; ?>
            </p>
            <br>
        </div> -->
    </div>
</section>
