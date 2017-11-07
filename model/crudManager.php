<?php
require_once('pdo.php');
require_once('compteClass.php');

class Manager{
  private $_crud;


  // -------------setter
// ----------------------------
  public function setCrud($crud){
    $this->_crud=$crud;
  }

// ----------------getter
// ---------------------------
  public function getCrud(){
    return $this->_crud;
  }

  // --------------methode insert
  // ----------------------

  public function insert($insert){
    $req=connection()->prepare('INSERT INTO compte(name,sold)
        VALUES(:name,:sold)');

        $req->execute(array(
  'name'=>$insert->getName(),
  'sold'=>$insert->getSold()
));
}
// -----------------methode selection
// -----------------------------------
  public function select($select){
    $req=connection()->query('SELECT * FROM compte');

  $compte=$req->fetchAll(PDO::FETCH_ASSOC);
  return $compte;
  }
}
