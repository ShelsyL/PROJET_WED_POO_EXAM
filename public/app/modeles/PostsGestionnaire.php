<?php

/*
./app/modeles/PostsGestionnaire.php
Gestionnaire des posts (Toutes les fonctions)
 */

namespace App\Modeles;

class PostsGestionnaire {
  // Va chercher tout (Posts)
  public function findAll (\PDO $connexion) :array { // On récupère la connexion
  	$sql = "SELECT *
        		FROM posts
      			ORDER BY created_at DESC
            LIMIT 10;";
    // Pas de paramètres extérieur donc on peut l'exécuter directement
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC); // On retourne un tableau indéxé de tableau associatif - Ce tableau associatif va se retouver dans $posts du fichier ./app/controleurs/postsControleur.php
  }

  // Va chercher un par son id
  public function findOneById(\PDO $connexion, int $id) :array {
  	$sql = "SELECT *
  					FROM posts
  					WHERE id = :id;";
  	$rs = $connexion->prepare($sql);
  	$rs->bindValue(':id', $id, \PDO::PARAM_INT);
  	$rs->execute();
  	return $rs->fetch(\PDO::FETCH_ASSOC);
  }

}
