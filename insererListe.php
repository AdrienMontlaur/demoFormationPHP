<?php

require_once('recupListe.php');

$db=new PDO('mysql:host=localhost;dbname=carnet_adresse;charset=utf8','root','');

foreach($table as $eleve){
  $nom=$eleve['nom'];
  $prenom=$eleve['prenom'];
  $genre='i';
  $email=strtolower("$prenom.$nom@greta-sud-aquitaine.academy");
  $date=$eleve['dateDeNaissance'];

  $inser="INSERT INTO contacts (nom,prenom,genre,email,datedenaissance) VALUES('$nom','$prenom','$genre','$email','$date')";
  $db->query($inser);
}
 header("location: http://monsite.local/baseDonnees/afficheListe.php");

?>
