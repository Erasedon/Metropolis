<?php
 include "connexion.php";
 
    $envoim = $db->prepare("SELECT * FROM `audiovisuel`");
    $envoim->execute();
  

?>

    <h2>Liste des Films </h2> 
        <div  class="position">
        
        <form method="POST" action="" name="list2">
         <table style ="color:white; border: 1px solid red">
                <tr  style="border: 1px solid red">
                    <th> Numero audiovisuel   </th>
                    <th>  titre_visuel   </th>
                    <th> bande_visuel </th>
                    <th> img_visuel </th>
                    <th> type_visuel </th>
                    <th> synonyme_visuel </th>
                    <th> info_visuel </th>
                    <th colspan=2> Actions</th>
                </tr>

                <?php  
      $i=0; 
      while ($result = $envoim->fetch()) {
          $id_visuel = $result['id_visuel'];
        $titre= $result['titre_visuel'];
        $synonyme=$result['synonyme_visuel'];
        $type =$result['type_visuel'];
        $img =$result['img_visuel'];
        $info=$result['info_visuel'];
        $bande =$result['bande_visuel'];
      $i++;         
     ?>           
                <tr >
                        <td><?php echo $id_visuel;?></td>  
                   <th> <td> <?php echo $titre;  ?> </td></th>
                   <th> <td> <?php echo $bande;  ?></td></th>
                   <th> <td>  <?php echo $img;  ?> </td></th>
                   <th> <td> <?php echo $type;  ?></td></th>
                   <th> <td> <?php echo $synonyme;  ?></td></th>
                   <th> <td> <?php echo $info;  ?></td></th>
                   <th colspan=2> Actions</th>
                 </tr><?php }?>
            </table></div></form>