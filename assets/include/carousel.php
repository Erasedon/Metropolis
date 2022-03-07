<?php
 include "connexion.php";
 
    $envoim = $db->prepare("SELECT `nomm`,`img` FROM `musique`");
    $envoim->execute();
  

?>
  <h2 id='playlist' > Playlist </h2>
<section id="9">
<div id="carousel1">
<?php   while ($row = $envoim->fetch()) {
      $data = $row[0];
      $img =$row[1];
    

?>     
      <div class="item">
        <div class="item__image"><a href="film.php">
          <img src="assets/img/<?php  print $img; ?>.jpg" alt=""></a>
        </div>
        <div class="item__body">
          <div class="item__title">
            <?php 
            print $data;  
            ?>
          </div>
          <div class="item__description">
          <?php 
            print $data;  
            ?>
          </div>
        </div>
      </div>
      <?php } ?>
</div>
</section>

<div class="seperator"></div>
<h2 id='playlist' > Playlist </h2>
<section id="2">
        <div id="carousel2">
        <?php   while ($row = $envoim->fetch()) {
            $data = $row[0];
            $img =$row[1];
            

        ?>
            <div class="item">
                <div class="item__image">
              <a href="assets/include/article.php"> <img src="assets/img/<?php  print $img; ?>.jpg" alt=""></a>
                </div>
                <div class="item__body">
                <div class="item__title">
                    <?php 
                    print $data;  
                    ?>
                </div>
                <div class="item__description">
                <?php 
                    print $data;  
                    ?>
                </div>
                </div>
            </div>
            <?php } ?>
        </div>

        </section>