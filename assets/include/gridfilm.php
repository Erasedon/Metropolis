<?php include "connexion.php";
    $getid = $_GET['id'];

    $filmaff = $db->prepare("SELECT * FROM audiovisuel WHERE id_visuel = :getid");
    $filmaff->execute(array(
        ':getid' => $getid
    ));
    $result = $filmaff->fetch();
    $titre= $result['titre_visuel'];
    $synonyme=$result['synonyme_visuel'];
    $type =$result['type_visuel'];
    $bande =$result['bande_visuel'];?>

<div style="overflow: hidden;height: 121vh;">
    <section id=2>
        <div id="textvideo">
                <h1 class=titrefilm><?php echo $titre?></h1>
            </div>

            <div class=" shadow">
            <div><img src="assets/img/fondnexflix.jpg"> </div>
        <!-- 
                <div class="gridimg imgcoter ">
                <div class="div1 tailleaffiche "><a href="#4"></a> </div>
                <div class="div2 tailleaffiche "> <a href="#4"> </a> </div>
                <div class="div3 tailleaffiche "> <a href="#4"> </a> </div>
                <div class="div4 tailleaffiche "> <a href="#4"> </a> </div>
                <div class="div5 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div6 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div7 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div8 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div9 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div10 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div11 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div12 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div13 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div14 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div15 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div16 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div17 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div18 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div19 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div20 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div21 tailleaffiche"> <a href="#4"> </a> </div>
                <div class="div22 tailleaffiche"> <a href="#4"> </a> </div>
            </div>
         -->
        </div>
    </section>
</div>