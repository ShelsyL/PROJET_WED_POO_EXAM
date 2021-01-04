<?php

namespace Noyau\Classes;
use \Noyau\Classes\App;

abstract class GestionnaireGenerique {

  protected $_table;
  protected $_class; // $_class sera crée à partir de $_table

  protected function __construc(){
    $this->_class = '\App\Modeles\\'.ucfirst(substr($this->_table, 0, -1));
  }


  public function findOneById(int $id) {
    $sql = "SELECT *
            FROM `{$this->_table}`
            WHERE id = :id;";
     $rs = App::getConnexion()->prepare($sql);
     $rs->bindvalue(':id', $id, \PDO::PARAM_INT);
     $rs->execute();
  return new $this->_class($rs->fetch(\PDO::FETCH_ASSOC));
  }


  public function findAll(array $data){
    $sql = "SELECT *
            FROM `{$this->_table}`
            ORDER BY `{$data['orderByField']}` {$data['orderBySens']}
            LIMIT :limit
            OFFSET :offset;";
    $rs = App::getConnexion()->prepare($sql);
    $rs->bindValue(':limit', $data['limit'], \PDO::PARAM_INT);
    $rs->bindValue(':offset', $data['offset'], \PDO::PARAM_INT);
    $rs->execute();
    $tab = $rs->fetchAll(\PDO::FETCH_ASSOC);

  // Retourne un tableau d'object de _class
  return $this->fromAssocToObject($tab);
  }

   // AUTRES METHODES
   // Parcours le tableau de resultat de la request ( [post[],post[],post[] ...])
   // Construit un tableau d'object [Post(),Post(),...)
   //
  protected function fromAssocToObject(array $rs){
    $tab = [];
    foreach($rs as $r){
        $tab[] = new $this->_class($r);
    }
    return $tab;
  }
}
