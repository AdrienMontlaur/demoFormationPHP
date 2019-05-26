<?php
echo modifEleve();
function modifEleve(){
  $db = new PDO('mysql:host=localhost;dbname=carnet_adresse;charset=utf8','phpmyadmin','MolUbuntu');
  $eleveAModif="SELECT * FROM contacts WHERE id=".$_GET['id'];
  $html="";
  $return=$db->query($eleveAModif);
  $elevemodif=[];
  while($value = $return->fetch()) {

              $elevemodif[]=array(
              'id'=>$value['id'],
              'nom'=>$value['nom'],
              'prenom'=>$value['prenom'],
              'genre'=>$value['genre'],
              'email'=>$value['email'],
              'date'=>$value['dateDeNaissance'],
              'tel'=>$value['tel']
             );
  }

  $html.="<form method='POST' action='#'>
          <input type='text' id='nom' name='nom' value='".$elevemodif[0]['nom']."' required> <br/>
          <input type='text' id='prenom' name='prenom' value='".$elevemodif[0]['prenom']."' required> <br/>
          <input type='text' id='genre' name='genre' value='".$elevemodif[0]['genre']."' required> <br/>
          <input type='date' id='date' value='".$elevemodif[0]['date']."' name='date'> <br/>
          <input type='text' id='tel' name='tel' value='".$elevemodif[0]['tel']."' placeholder='tel'> <br/>
          <input type='submit' value=Envoyer> <br/>
          </form>";

   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];
   $genre=$_POST['genre'];
   $date=$_POST['date'];
   $tel=$_POST['tel'];

   $email=strtolower($_POST['prenom'].".".$_POST['nom']."@greta-sud-aquitaine.academy");
   //if(isset($nom)&&isset($prenom)&&isset($date)&&isset($genre)){

     $modifEleve="UPDATE contacts SET nom='$nom',prenom='$prenom',genre='$genre',email='$email',datedenaissance='$date',tel='$tel' WHERE id=".$_GET['id'];

     $db->query($modifEleve);
  //}
   if(isset($_POST['nom'])){
     header("location: http://monsite.local/baseDonnees/afficheListe.php");
   };
  return $html;
}



?>
