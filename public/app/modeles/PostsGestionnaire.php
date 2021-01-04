<?php

/*
./app/modeles/PostsGestionnaire.php
Gestionnaire des posts
 */

namespace App\Modeles;
use \App\Modeles\Post;
use \Noyau\Classes\GestionnaireGenerique;

class PostsGestionnaire extends GestionnaireGenerique {

  public function __construct(){
    $this->_table = 'posts';
    parent::__construc();
  }
}
