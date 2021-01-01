<?php

/*
./app/modeles/Users.php
Modele d'un User
 */

namespace App\Modeles;

class User extends \Noyau\Classes\ModeleGenerique {

  private $_id = null, $_login, $_password, $_createdAt;

  // GETTERS
  public function getId(){
    return $this->_id;
  }
  public function getLogin(){
    return $this->_login;
  }
  public function getPassword(){
    return $this->_password;
  }
  public function getCreatedAt(){
    return $this->_createdAt;
  }

  // SETTERS
  public function setId(int $data = null){
    if (isset($data)):
      $this->_id = $data;
  }
  public function setLogin(int $data = null){
    if (isset($data)):
      $this->_login = $data;
  }
  public function setPassword(int $data = null){
    if (isset($data)):
      $this->_password = $data;
  }
  public function setCreatedAt(int $data = null){
    if (isset($data)):
      $this->_createdAt = $data;
  }


}
