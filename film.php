<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="assets/css/style.css"> 
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
    <title>Film metropolis</title>
</head>

<body>
    <div class="fondcolor">
     <section id= 1 > 
    <?php include 'assets/include/navbar.php' ?> 
   
    </section>
        <?php include 'assets/include/gridimg.php' ?>
    <?php 

    include "assets/include/divfilm.php";

    ?>
        <?php 

    include "assets/include/divacteur.php";

    ?>
        <?php include 'assets/include/footer.php'?>
    </div>

     <script src="assets/js/navbar.js"></script>
     <script src="assets/js/gallery.js"></script>  
    <script src="assets/js/carousel.js" async></script>
</body>
</html>