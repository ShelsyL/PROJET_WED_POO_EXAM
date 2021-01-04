<?php
/*
  ./public/app/controleurs/tagsControleur.php
  CONTROLEUR DES TAGS
*/

namespace App\Controleurs;
use \App\Modeles\TagsModele;
use \Noyau\Classes\ControleurGenerique;

class TagsControleur extends ControleurGenerique{

  public function __construct(){
    $this->_table='tags';
    parent::__construct();
  }

}
