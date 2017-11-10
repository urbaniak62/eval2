<?php
require_once('../model/pdo.php');
require_once('../model/crudManager.php');
require_once('../model/compte.Class.php');

$manager1=new Manager('crud');

$compte=$manager1->selectByid($_GET['id']);

if (isset($_POST['delete']) && isset($_POST['id'])) {
// var_dump($_POST);
$manager1->delete($_POST['id']);
header('location:index.php');
}




include "../views/deleteVue.php";
?>
