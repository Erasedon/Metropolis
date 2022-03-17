<?php
 include "connexion.php";
 
    $envoim = $db->prepare("SELECT * FROM `audiovisuel`");
    $envoim->execute();
  

?>

    <h2>Liste des Films </h2> 
        <div  class="position">
        
        <form method="POST" action="" name="list2">
         <table  style ="color:white; background: blue" >
         <thead>       
         <tr  style ="color:white; background: red">
                    <th> Numero audiovisuel   </th>
                    <th>  titre_visuel   </th>
                    <th> bande_visuel </th>
                    <th> img_visuel </th>
                    <th> type_visuel </th>
                    <th> synonyme_visuel </th>
                    <th> info_visuel </th>
                    <th colspan=2> Actions</th>
                </tr>
                </thead>
                <?php  
     
      while ($result = $envoim->fetch()) {
          $id_visuel = $result['id_visuel'];
        $titre= $result['titre_visuel'];
        $synonyme=$result['synonyme_visuel'];
        $type =$result['type_visuel'];
        $img =$result['img_visuel'];
        $info=$result['info_visuel'];
        $bande =$result['bande_visuel'];
        ?>           
                      
              <tbody>
                <tr>
                  <td><?php echo $id_visuel;?> </td>
                  <td> <?php echo $titre;  ?> </td>
                  <td> <?php echo $bande;  ?> </td>
                  <td><?php echo $img;  ?> </td>
                  <td>  <?php echo $type;  ?> </td>
                  <td> <?php echo $synonyme;  ?> </td>
                  <td>  <?php echo $info;  ?> </td>
                  <td  colspan=2> </td>
                </tr>
               <?php }?></tbody>
            </table></div></form>
