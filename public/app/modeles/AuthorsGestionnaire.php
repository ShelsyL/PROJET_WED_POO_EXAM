<?php
/*
	./public/app/modeles/authorsModele.php
	MODELE DES AUTEURS
*/
namespace App\Modeles;
use \App\Modeles\Author;
use \Noyau\Classes\GestionnaireGenerique;

class AuthorsGestionnaire extends GestionnaireGenerique{

	function __construct(){
		$this->_table = 'authors';
		parent::__construc();
	}

}
