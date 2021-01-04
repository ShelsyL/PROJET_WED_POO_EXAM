<?php
/*
	./public/app/controleurs/PostsControleur.php
  Controleur des Posts
*/

namespace App\Controleurs;
use \Noyau\Classes\ControleurGenerique;
use \App\Modeles\TagsGestionnaire;
use \App\Modeles\AuthorsGestionnaire;

class CategoriesControleur extends ControleurGenerique {

  public function __construct(){
    $this->_table='categories';
    parent::__construct();
  }

}
