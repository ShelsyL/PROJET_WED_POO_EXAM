<?php

/*
./app/modeles/Tags.php
Modele d'un Tag
 */

namespace App\Modeles;

class Tag extends \Noyau\Classes\ClasseGenerique {

  private $_id = null, $_name, $_createdAt;

  // GETTERS
  public function getId(){
    return $this->_id;
  }
  public function getName(){
    return $this->_name;
  }
  public function getCreatedAt(){
    return $this->_createdAt;
  }

  // SETTERS
  public function setId(int $data = null){
    if (isset($data)):
      $this->_id = $data;
  }
  public function setName(int $data = null){
    if (isset($data)):
      $this->_name = $data;
  }
  public function setCreatedAT(int $data = null){
    if (isset($data)):
      $this->_createdAt = $data;
  }

}
