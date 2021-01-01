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
		$this->_class = '\App\Modeles\Author';
	}

	// Va chercher un par son ID (author)
	public function findOneAuthorById(int $id) :Author { // La function aura besoin de la connexion PDO et d'un entier nommé $id - Va renvoyer un tableau de type associatif
		return $this->finOneById($id);
	}

}
