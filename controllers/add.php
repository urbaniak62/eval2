<?php
require_once('../model/pdo.php');
require_once('../model/crudManager.php');
require_once('../model/compte.Class.php');

$manager1=new Manager('crud');


if (isset($_POST['name']) && isset($_POST['sold'])) {
  $add=new Compte($_POST);
  // var_dump($_POST);
  // var_dump($add);
  $manager1->insert($add);
  // var_dump($manager1);
  header('location:index.php');
}


include "../views/addVue.php";

 ?>
