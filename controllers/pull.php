<?php
require_once('../model/pdo.php');
require_once('../model/crudManager.php');
require_once('../model/compte.Class.php');

$manager1=new Manager('crud');


$compte=$manager1->select();

if (isset($_POST['pull']) && isset($_POST['id'])) {
  $pull=$_POST['pull'];


$virer=$manager1->selectById($_POST['id']);
// var_dump($virer);

$virement= new Compte($virer);
$virement->addMoney($_POST['somme']);
$manager1->update($virement);
// var_dump($virement);
// var_dump($_POST); 
header('location:index.php');
}


include "../views/pull.php";

 ?>
