<?php

  $db = new PDO('mysql:host=localhost;dbname=carnet_adresse;charset=utf8','root','');

foreach($_POST['supp'] as $key=>$eleve){

     $suppEleve="DELETE FROM contacts WHERE id=".$_POST['supp'][$key];

     $db->query($suppEleve);
     echo var_dump($_POST['supp']);
}

 header("location: http://monsite.local/baseDonnees/afficheListe.php");

?>
