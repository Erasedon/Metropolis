<?php
 include "connexion.php";


    $envoim = $db->prepare("SELECT * FROM audiovisuel
      INNER JOIN appartenir ON audiovisuel.id_visuel = appartenir.id_visuel
      INNER JOIN category ON category.id_category = appartenir.id_category");
    $envoim->execute();
    $row = $envoim->fetchAll();

    
 
  

?><section id="9">
<?php 

foreach($row as $value){
    $id_visuel= $value['id_visuel'];
      $nomcat= $value['nom_category'];  
      
    $titre= $value["titre_visuel"];
      $resume=$value["synonyme_visuel"];
      $img =$value["img_visuel"]; 
  
?>   
  <h2 class='playlist'> <?php echo $nomcat ?>  </h2>

<div class="carousel">
   <?php //if($nomcat == "Action"){ ?>
      <div class="item"> 
        <div class="item__image"><a href="film.php?id=<?php  echo $id_visuel; ?>">
          <img src="<?php  print $img; ?>" alt=""></a>
        </div>
        <div class="item__body">
          <div class="item__title">
            <?php 
            print $titre;  
            ?>
          </div>
          <div class="item__description">
          <?php 
            print $resume;  
            ?>
          </div>
        </div>
       
      </div> <?php// }?> 
      
</div>

<div class="separator"></div> 
<?php }?></section>