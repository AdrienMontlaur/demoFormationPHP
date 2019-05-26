<?php

function RecupInfosBD(){
    $db = new PDO('mysql:host=localhost;dbname=carnet_adresse;charset=utf8','phpmyadmin','MolUbuntu');
    $recupInfos=[];
    $infos="SELECT * FROM contacts";
    $return=$db->query($infos);
    while($value = $return->fetch()) {

                $recupInfos[]=array(
                'id'=>$value['id'],
                'nom'=>$value['nom'],
                'prenom'=>$value['prenom'],
                'genre'=>$value['genre'],
                'email'=>$value['email'],
                'date'=>$value['dateDeNaissance'],
                'tel'=>$value['tel']
               );
    }

    return $recupInfos;

};
