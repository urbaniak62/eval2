<?php
require_once('../model/pdo.php');
require_once('../model/crudManager.php');
require_once('../model/compte.Class.php');

$manager1=new Manager('crud');

$compte=$manager1->select();

if (isset($_POST['transfert']) && isset($_POST['id']) && isset($_POST['somme1'])&& isset($_POST['somme2'])) {
    $transfert=$_POST['transfert'];
  
  
  $transfert=$manager1->selectById($_POST['id']);
  //  var_dump($transfert);
  
  $transferer= new Compte($transfert);
  $transferer->removeMoney($_POST['somme1']);
  $manager1->update($transferer);
  $transferer->addMoney($_POST['somme2']);
  $manager1->update($transferer);
  var_dump($transferer);
  var_dump($_POST);
  var_dump($transfert);
  //  header('location:index.php');
  }
  

include "../views/transfert.php";

 ?>
