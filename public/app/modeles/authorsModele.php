<?php
/*
	./public/app/modeles/authorsModele.php
	MODELE DES AUTEURS
*/
namespace App\Modeles\AuthorsModele;


// Va chercher un par son ID (author)
function findOneById(\PDO $connexion, int $id) :array { // La function aura besoin de la connexion PDO et d'un entier nommé $id - Va renvoyer un tableau de type associatif
	$sql = "SELECT *
    		  FROM authors
          WHERE id = :id;"; // :id => information qui vient de la barre url => on ne peut pas l'utiliser directement => prepare
  	$rs = $connexion->prepare($sql);
  	$rs->bindValue(':id', $id, \PDO::PARAM_INT); // on va binder les values càd lier les valeurs aux paramètres => Parametre que je veux lier une valeur, c'est id, la valeur que je veux lui mettre c'est $id et la valeur qui doit s'y trouver c'est \PDO
  	$rs->execute(); // On execute la requete
  return $rs->fetch(\PDO::FETCH_ASSOC); // Retourne au controleur, un tableau associatif (les informations de l'auteur) qui va se retrouver dans postsControleur.php, dans $author
}
