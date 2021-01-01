<?php

/*
./app/modeles/Posts.php
Modele d'un Post
 */

namespace App\Modeles;
use \Noyau\Classes\ModeleGenerique;

// Un Post contient
// - Id - Titre - Content - Image - Created_at - Auteur - Categories - Tags
class Post extends ClasseGenerique {

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
public function getAuthor_id() :string{
  return $this->_author_id;
}
public function getCategorie_id() :string{
  return $this->_categorie_id;
}

// SETTERS - HYDRATER
public function setId(int $data = null){
  if (isset($data)):
    $this->_id = $data;
  endif;
}
public function setTitle(string $data = null){
  if (isset($data)):
    $this->_title = $data;
    endif;
}
public function setContent(string $data = null){
  if (isset($data)):
    $this->_content = $data;
    endif;
}
public function setImage(string $data = null){
  if (isset($data)):
    $this->_image = $data;
    endif;
}
public function setCreated_at(string $data = null){
  if (isset($data)):
    $this->_created_at = $data;
    endif;
}
public function setAuthor_id(string $data = null){
  if (isset($data)):
    $this->author_id = $data;
    endif;
}
public function setCategorie_id(string $data = null){
  if (isset($data)):
    $this->_categorie_id = $data;
    endif;
}


}
