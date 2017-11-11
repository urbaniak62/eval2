<?php
require_once('../model/pdo.php');
require_once('../model/crudManager.php');
require_once('../model/compte.Class.php');

$manager1=new Manager('crud');


$compte=$manager1->select();

if (isset($_POST['remove']) && isset($_POST['remove'])) {
  $pull=$_POST['remove'];


$debiter=$manager1->selectById($_POST['id']);
// var_dump($debiter);

$remove= new Compte($debiter);
$remove->removeMoney($_POST['somme']);
$manager1->update($remove);
var_dump($remove);
var_dump($_POST);
header('location:index.php');
}


include "../views/remove.php";

 ?>
