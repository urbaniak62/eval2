<?php


// connection to the data base

function connection(){
  try {
    $bdd= new PDO('mysql:host=localhost;dbname=eval2;metacharset=utf8','root','chniak24dec78-'
    , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
 catch (Exception $e)
  {
    die('erreur:'.$e->getMessage());
}
 return $bdd;
  }

 ?>
 
