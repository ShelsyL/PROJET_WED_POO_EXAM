<?php

namespace Noyau\Classes;
use \Noyau\Classes\App;

abstract class GestionnaireGenerique {

  protected $_table;
  protected $_class; // $class sera crée à partir de $_table

  protected function __construc{
    $this->_class = '\App\Modeles\\'
                    . ucfirst(substr($this->table, 0, -1));
  }


// METHODES CRUD
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
  public function findAll(string $tri ='id'){
    $sql = "SELECT *
            FROM `{$this->_table}`
            ORDER BY $tri ASC;";
    $rs = App::getConnexion()->prepare($sql);
    $rs->execute();
    $tab = $rs->fetchAll(\PDO::FETCH_ASSOC);

    return $this->fromAssocToObject($tab);
  }

// AUTRES METHODES
  protected function fromAssocToObject(array $rs){
    $tab = [];
    foreach($rs as $r){
        $tab[] = new $this->_class($r);
    }
    return $tab;
  }
}
