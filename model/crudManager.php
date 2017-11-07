<?php
require_once('pdo.php');
require_once('compte.Class.php');

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
    $req=connection()->prepare('INSERT INTO compte(id,name,sold)
        VALUES(:id,:name,:sold)');

        $req->execute(array(
  'id'=>$insert->getId(),
  'name'=>$insert->getName(),
  'sold'=>$insert->getSold()
));
}
// -----------------methode select
// -----------------------------------
  public function select(){
    $req=connection()->query('SELECT * FROM compte');

  $compte=$req->fetchAll(PDO::FETCH_ASSOC);
  return $compte;
  }

  // ---------------methode update
  // -------------------------------
  public function update($compte){

  }

  // ---------------methode delete
  // ---------------------------------

  public function delete($id){
  $req=connection()->prepare('DELETE  FROM compte WHERE id=:id');
  $req->execute(array(
    'id'=>$id
  ));
 }
}
