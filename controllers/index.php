<?php
require_once('../model/pdo.php');
require_once('../model/compte.Class.php');
require_once('../model/crudManager.php');

$manager1=new Manager('crud');


$compte=$manager1->select();

var_dump($manager1);
include "../views/indexVue.php";
 ?>
