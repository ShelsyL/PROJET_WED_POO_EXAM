<?php

/*
./app/modeles/Posts.php
Modele d'un Post
 */

namespace App\Modeles;
use \Noyau\Classes\ModeleGenerique;

// Un Post contient
// - Id - Titre - Content - Image - Created_at - Auteur - Categories - Tags
class Post extends ModeleGenerique {

private $_id = null;
private $_title;
private $_content;
private $_image;
private $_created_at;
private $_author_id;
private $_categorie_id;
private $_tags;

// GETTERS
public function getId(){
  return $this->_id;
}
public function getTitle() :string{
  return $this->_title;
}
public function getContent() :string{
  return $this->_content;
}
public function getImage() :string{
  return $this->_image;
}
public function getCreated_at() :string{
  return $this->_created_at;
}
public function getAuthor_id() :int{
  return $this->_author_id;
}
public function getCategorie_id() :string{
  return $this->_categorie_id;
}

// SETTERS - HYDRATER
public function setId(int $data = null){
  if (isset($data)){
    $this->_id = $data;
  }
}
public function setTitle(string $data = null){
  if (isset($data)){
    $this->_title = $data;
    }
}
public function setContent(string $data = null){
  if (isset($data)){
    $this->_content = $data;
    }
}
public function setImage(string $data = null){
  if (isset($data)){
    $this->_image = $data;
    }
}
public function setCreated_at(string $data = null){
  if (isset($data)){
    $this->_created_at = $data;
    }
}
public function setAuthor_id(int $data = null){
  if (isset($data)){
    $this->_author_id = $data;
    }
}
public function setCategorie_id(string $data = null){
  if (isset($data)){
    $this->_categorie_id = $data;
    }
}


}
