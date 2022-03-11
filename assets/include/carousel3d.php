<?php
 include "connexion.php";
 
    $envoim = $db->prepare("SELECT * FROM `audiovisuel`");
    $envoim->execute();
  

?>

<section id="7">
  <div class="gallery">
    <div class="gallery-container">
    <?php  
      $i=0; 
      while ($row1 = $envoim->fetch()) {
      $titre= $row1[1];
      $resume=$row1[5];
      $img =$row1[3];
      $i++;
     ?>    
      <img class="gallery-item gallery-item-<?php print $i;?>" src="<?php  print $img; ?>" data-index="<?php print $i;?>">
      <?php } ?>
    </div>
    <div class="gallery-controls "></div>
  </div>
  <div class="separator"></div>
  </section>
