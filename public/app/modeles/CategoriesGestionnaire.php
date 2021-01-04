<?php
/*
	./public/app/modeles/categoriesModele.php
	MODELE DES CATEGORIES
*/
namespace App\Modeles;
use \App\Modeles\Category;
use \Noyau\Classes\GestionnaireGenerique;

class CategoriesGestionnaire extends GestionnaireGenerique{

	function __construct(){
		$this->_table = 'categories';
		parent::__construc();
	}

}
