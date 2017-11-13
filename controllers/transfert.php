<?php
require_once('../model/pdo.php');
require_once('../model/crudManager.php');
require_once('../model/compte.Class.php');

$manager1=new Manager('crud');

$compte=$manager1->select();

if (isset($_POST['transfer']) && isset($_POST['id'])) {
    $pull=$_POST['remove'];
  
  
  $transfer=$manager1->selectById($_POST['id']);
   var_dump($transfer);
  
  $transferer= new Compte($transfer);
  $transferer->transferMoney($_POST['somme']);
  $manager1->update($transfer);
  var_dump($transferer);
  var_dump($_POST);
  header('location:index.php');
  }
  

include "../views/transfert.php";

 ?>
