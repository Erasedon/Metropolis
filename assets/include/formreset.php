
<div id="pen-title">
  <h1>réinitialiser Mot de passe</h1>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Voici la premiere étape pour réinitialiser votre Mot de passe</h1>  
    <form method="post" action="assets/include/traitement_reset.php">
      <div class="input-container">
        <input type="#{type}"  name="mail" required="required"/>
        <label for="#{label}">Adresse mail</label>
        <div class="bar"></div>
      </div>
      <?php 
  if(isset($_GET['reset'])){
            switch ($_GET['reset']){
                case "erreurexist":
                    echo "<p class='messageerreur'> Réinitialisation du Mot de passe impossible :<br> adresse mail n'est pas enregister</p>";
                    break;
                }
        }
        ?> 	  
      <div class="button-container">
        <button><span>confirmation</span></button>
      </div>
    </form>
  </div>
     

<!-- Portfolio--><a id="portfolio" href="localhost/portfolio/" title="View my portfolio!"><i class="fa fa-link"></i></a>
<!-- CodePen--><a id="codepen" href="#" title="Follow me!"><i class="fa fa-codepen"></i></a>

