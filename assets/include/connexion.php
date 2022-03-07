<?php

try{
	$db=new PDO('mysql:host=localhost;dbname=musical','root','');
 

} catch(PDOException $e){
	die('Erreur:'.$e->getMessage());
}

?>	