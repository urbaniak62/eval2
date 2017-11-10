<?php
require_once('pdo.php');
require_once('crudManager.php');

 class compte{
  private $_id;
  private $_name;
  private $_sold;

  // -------------contructeur
  // ---------------------------

  public function __construct(array $donne){
    $this->hydrate($donne);
  }

  // ---------------hydratation
  // ----------------------------
  public function hydrate(array $donnes){
    foreach ($donnes as $key => $value) {
      $method = 'set'.ucfirst($key);
      if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }

  // ------------------setter
  // ----------------------------

  public function setId($id){
    $this->_id=$id;
  }

  public function setName($name){
  $this->_name=$name;
 }

 public function setSold($sold){
   $this->_sold=$sold;
 }

 // ----------getter
 // ------------------------

public function getId(){
  return $this->_id;
}

 public function getName(){
   return $this->_name;
 }

 public function getSold(){
   return $this->_sold;
 }
 // --------------pull money
 // --------------------------
public function addMoney($sold){
  $this->_sold +=$sold;
  $this->setSold($this->_sold);
}


// --------------pullMoney
// ----------------------------



}

 ?>
