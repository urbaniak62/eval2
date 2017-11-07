<?php
require_once('pdo.php');
require_once('crudManager.php');

 class compte{
  private $_name;
  private $_sold;

  // ------------------setter
  // ----------------------------

  public function setName($name){
  $this->_name=$name;
 }

 public function setSold($sold){
   $this->_sold=$sold;
 }

 // ----------getter
 // ------------------------
 public function getName(){
   return $this->_name;
 }

 public function getSold(){
   return $this->_sold;
 }
}

 ?>
