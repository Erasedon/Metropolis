<?php


  $sqlUnCarousel = $db->prepare("SELECT * FROM audiovisuel
    INNER JOIN appartenir ON audiovisuel.id_visuel = appartenir.id_visuel
    INNER JOIN category ON category.id_category = appartenir.id_category
    WHERE appartenir.id_category = :id_cat");
  $sqlUnCarousel->execute(['id_cat'=>$idCat]);


  // si j'ai un element dans la table  il compte la  valeur et donne la valeur en boucle //
  $count = $sqlUnCarousel->rowCount();

  if($count > 0){


?>

<section id="section-carousel-<?= $idCat ?>">

<h2 class='playlist'> <?php echo $nomcat ?>  </h2>

<div class="carousel">

<?php 
 while ($row = $sqlUnCarousel->fetch()){
    $id_visuel= $row['id_visuel'];
    $nomcat = $row['nom_category'];  
    $titre= $row["titre_visuel"];
    $resume=$row["synonyme_visuel"];
    $img =$row["img_visuel"];   
?>   



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
      </div>
      
      
      <?php } ?>
      
    </div>
<div class="separator"></div> 

</section>
<?php }  ?>