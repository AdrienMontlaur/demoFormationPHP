<?php

require_once('listeEleve.php');

$table=[];

foreach($eleves as $eleve){

$table[]=$eleve;

};

echo var_dump($table);

?>
