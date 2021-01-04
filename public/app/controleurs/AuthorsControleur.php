<?php
/*
	./public/app/controleurs/PostsControleur.php
  Controleur des Posts
*/

namespace App\Controleurs;
use \Noyau\Classes\ControleurGenerique;
use \App\Modeles\AuthorsGestionnaire;

class AuthorsControleur extends ControleurGenerique {

  public function __construct(){
    $this->_table='authors';
    parent::__construct();
  }
}
