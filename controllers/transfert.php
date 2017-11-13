<?php
require_once('../model/pdo.php');
require_once('../model/crudManager.php');
require_once('../model/compte.Class.php');

$manager1=new Manager('crud');

$compte=$manager1->select();

if (isset($_POST['transfert']) && isset($_POST['id']) && isset($_POST['somme'])) {
    $transfert=$_POST['transfert'];
  
  
  $transfert=$manager1->selectById($_POST['id']);
  //  var_dump($transfert);
  
  $transferer= new Compte($transfert);
  $transferer->removeMoney($_POST['somme']);
  $transferer->addMoney($_POST['somme']);
  $manager1->update($transferer);
   var_dump($transferer);
    var_dump($_POST);
  //  header('location:index.php');
  }
  

include "../views/transfert.php";

 ?>
