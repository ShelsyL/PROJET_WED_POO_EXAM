<?php

/*
./app/modeles/Tags.php
Modele d'un Tag
 */

namespace App\Modeles;
use \Noyau\Classes\ModeleGenerique;

class Tag extends ModeleGenerique {

  private $_id = null;
  private $_name;
  private $_createdAt;

  // GETTERS
  public function getId() :int{
    return $this->_id;
  }
  public function getName() :string{
    return $this->_name;
  }
  public function getCreatedAt() :string{
    return $this->_createdAt;
  }

  // SETTERS
  public function setId(int $data = null){
    if (isset($data)){
      $this->_id = $data;
    }
  }
  public function setName(string $data = null){
    if (isset($data)){
      $this->_name = $data;
      }
  }
  public function setCreatedAT(string $data = null){
    if (isset($data)){
      $this->_createdAt = $data;
      }
  }

}
