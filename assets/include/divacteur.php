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
    $img =$result['img_visuel'];
    $bande =$result['bande_visuel'];

?>

<section class="position">
    <div class="dispositionimgtext">
    <div class="containerimgtext">
                  <img  class="taille" src="<?php echo $img?>" alt="">
            </div>
        <div class="newscontainer">
            <p class=titre><?php echo $titre?></p>
            <p class="justtext">
            <?php echo $synonyme;   ?> <br>
            <?php  echo $type; ?>
            </p>
            <br>
        </div>
    </div>
</section>
<div class="separator"></div>