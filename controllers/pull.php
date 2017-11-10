<?php
require_once('../model/pdo.php');
require_once('../model/crudManager.php');
require_once('../model/compte.Class.php');

$manager1=new Manager('crud');


$compte=$manager1->select();


include "../views/pull.php";

 ?>
