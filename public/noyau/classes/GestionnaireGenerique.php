<?php

namespace Noyau\Classes;
use \Noyau\Classes\App;

abstract class GestionnaireGenerique {

  protected $_table ='default';
  protected $_class ='default';

// FUNCTION finOneById
  public function finOneById(int $id) {
    $sql = "SELECT *
            FROM `{$this->_table}`
            WHERE id = :id;";
   $rs = App::getConnexion()->prepare($sql);
   $rs->bindvalue(':id', $id, \PDO::PARAM_INT);
   $rs->execute();
   return new $this->_class($rs->fetch(\PDO::FETCH_ASSOC));
  }

// FONCTON findAll
  public function findAll(string $tri ='id', string $triOrder = "ASC", int $limit = null ) :array {
    $sql = "SELECT *
            FROM `{$this->_table}`
            ORDER BY $tri $triOrder";
    // Si $limit existe on l'ajoute
    if($limit){
      $sql .= " LIMIT ".$limit;
    }
    // Je termine par l'ajout du ;
    $sql .= ";";

    $rs = App::getConnexion()->prepare($sql);
    $rs->execute();
    $tab = $rs->fetchAll(\PDO::FETCH_ASSOC);

    return $this->fromAssocToObject($tab);
  }

  protected function fromAssocToObject(array $rs){
    $tab = [];
    foreach($rs as $r){
        $tab[] = new $this->_class($r);
    }
    return $tab;
  }
}
