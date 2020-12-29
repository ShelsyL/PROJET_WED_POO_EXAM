<?php
/*
  ./public/app/controleurs/tagsControleur.php
  CONTROLEUR DES TAGS
*/

namespace App\Controleurs;
use \App\Modeles\TagsModele;

class TagsControleur {

  public function indexByPostIdAction(\PDO $connexion, int $postId) {
    // Je met dans $tags la liste des tags du posts que je demande au modele.
    include_once '../app/modeles/tagsModele.php';
    $tags = TagsModele\findAllByPostId($connexion, $postId); // On ne prend que ceux qui correspond au post

    // Je charge la vue tags/indexByPostId directement (pas dans $content), donc pas de ob_start();
     		include'../app/vues/tags/indexByPostId.php';
     		// SI : include'../app/vues/tags/index.php'; => index, ce serait la liste complete des tags
     		// indexByPostId : include'../app/vues/tags/indexByPostId.php'; => Permet d'avoir un index qui correspond au poste.
   }

}
