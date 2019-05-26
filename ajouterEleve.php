<?php
echo ajouterEleve();
function ajouterEleve(){
  $db=new PDO('mysql:host=localhost;dbname=carnet_adresse;charset=utf8','root','');
  $html="";

  $html.="<form method='POST' action='#'>
          <input type='text' id='nom' name='nom' placeholder='nom' required> <br/>
          <input type='text' id='prenom' name='prenom' placeholder='prenom' required> <br/>
          <input type='text' id='genre' name='genre' placeholder='genre' required> <br/>
          <input type='date' id='date' name='date'> <br/>
          <input type='text' id='tel' name='tel' placeholder='tel'> <br/>
          <input type='submit' value=Envoyer> <br/>
          </form>";

   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];
   $genre=$_POST['genre'];
   $date=$_POST['date'];
   $tel=$_POST['tel'];

   $email=strtolower($_POST['prenom'].".".$_POST['nom']."@greta-sud-aquitaine.academy");
   if(isset($nom)&&isset($prenom)&&isset($date)&&isset($genre)){

     $inserEleve="INSERT INTO contacts (nom,prenom,genre,email,datedenaissance,tel) VALUES('$nom','$prenom','$genre','$email','$date','$tel')";

     $db->query($inserEleve);

     header("location: http://monsite.local/baseDonnees/afficheListe.php");
   };
  return $html;
}



?>
