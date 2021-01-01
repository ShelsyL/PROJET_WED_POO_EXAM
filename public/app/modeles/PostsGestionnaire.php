<?php

/*
./app/modeles/PostsGestionnaire.php
Gestionnaire des posts (Toutes les fonctions)
 */

namespace App\Modeles;
use \App\Modeles\Post;
use \Noyau\Classes\GestionnaireGenerique;

class PostsGestionnaire extends GestionnaireGenerique {

  public function __construct(){
    $this->_table = 'posts';
    $this->_class = '\App\Modeles\Post';
  }
  // Va chercher tout (Posts)
  public function findAllPost() :array { // On récupère la connexion
    return $this->findAll('created_at','DESC',5);
  }

}
