<?php
require_once('../model/pdo.php');
require_once('../model/crudManager.php');
require_once('../model/compte.Class.php');

$manager1=new Manager('crud');

$compte=$manager1->select();

if (isset($_POST['transfert']) && isset($_POST['crediteur'])&& isset($_POST['debiteur'])&& isset($_POST['somme'])) {
    $transfert=$_POST['transfert'];
  
  
  $transfert=$manager1->selectById($_POST['debiteur']);
  //  var_dump($transfert);
  
  $transferer= new Compte($transfert);
  $transferer->removeMoney($_POST['somme']);
  $manager1->update($transferer);

  $transfertA=$manager1->selectById($_POST['crediteur']);
  $transfererA=new Compte($transfertA);

  $transfererA->addMoney($_POST['somme']);
  $manager1->update($transfererA);
  // var_dump($transferer);
  // var_dump($transfererA);
   header('location:index.php');
  }
  

include "../views/transfert.php";

 ?>
