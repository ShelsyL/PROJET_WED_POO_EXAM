<?php

/*
./app/modeles/Authors.php
Modele d'un autheur
 */

namespace App\Modeles;
use \Noyau\Classes\ModeleGenerique;

class Author extends ModeleGenerique {

  private $_id = null;
  private $_firstname;
  private $_lastname;
  private $_biography;
  private $_avatar;
  private $_created_at;


  // GETTERS
  public function getId(){
    return $this->_id;
  }
  public function getFirstname(){
    return $this->_firstname;
  }
  public function getLastname(){
    return $this->_lastname;
  }
  public function getBiography(){
    return $this->_biography;
  }
  public function getAvatar(){
    return $this->_avatar;
  }
  public function getCreated_at(){
    return $this->_created_at;
  }

  // SETTERS
  public function setId(int $data = null){
    if (isset($data)){$this->_id = $data;}
  }
  public function setFirstname(string $data = null){
    if (isset($data)){$this->_firstname = $data;}
  }
  public function setLastname(string $data = null){
    if (isset($data)){$this->_lastname = $data;}
  }
  public function setBiography(string $data = null){
    if (isset($data)){$this->_biography = $data;}
  }
  public function setAvatar(string $data = null){
    if (isset($data)){$this->_avatar = $data;}
  }
  public function setCreated_at(string $data = null){
    if (isset($data)){$this->_created_at = $data;}
  }

}
