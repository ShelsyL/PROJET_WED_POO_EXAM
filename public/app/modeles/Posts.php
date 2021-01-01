<?php

/*
./app/modeles/Posts.php
Modele d'un Post
 */

namespace App\Modeles;

// Un Post contient
// - Id - Titre - Content - Image - Created_at - Auteur - Categories - Tags
class Post extends \Noyau\Classes\ClasseGenerique {

private $_id = null, $_title, $_content, $_image, $_createdAt, $_author, $_category, $_tags;

// GETTERS
public function getId(){
  return $this->_id;
}
public function getTitle(){
  return $this->_title;
}
public function getContent(){
  return $this->_content;
}
public function getImage(){
  return $this->_image;
}
public function getCreatedAt(){
  return $this->_createdAt;
}
public function getAuthor(){
  return $this->_author;
}
public function getCategory(){
  return $this->_category;
}
public function getTags(){
  return $this->_tags;
}

// SETTERS
public function setId(int $data = null){
  if (isset($data)):
    $this->_id = $data;
}
public function setTitle(int $data = null){
  if (isset($data)):
    $this->_title = $data;
}
public function setContent(int $data = null){
  if (isset($data)):
    $this->_content = $data;
}
public function setImage(int $data = null){
  if (isset($data)):
    $this->_image = $data;
}
public function setCreatedAt(int $data = null){
  if (isset($data)):
    $this->_createdAt = $data;
}
public function setAuthor(int $data = null){
  if (isset($data)):
    $this->_author = $data;
}
public function setCategory(int $data = null){
  if (isset($data)):
    $this->_category = $data;
}
public function setTags(int $data = null){
  if (isset($data)):
    $this->_tags = $data;
}

}
