<?php
/*
	./public/app/controleurs/PostsControleur.php
  Controleur des Posts
*/

namespace App\Controleurs;
use \App\Modeles\PostsModele;

class PostsControleur {

  public function indexAction(\PDO $connexion) {
      // On instancie (créer un nouveau objet) un objet de type PostsGestionnaire()
      $postsGestionnaire = new \App\Modeles\PostsGestionnaire();
      // On lance la méthode findAll de PostsGestionnaire que je met dans $postsData
      $postsData = $postsGestionnaire->findAll();

    // Je charge la vue posts/index dans $content
    GLOBAL $content;
    ob_start();
      include '../app/vues/posts/index.php';
    $content = ob_get_clean();
  }


  public function showAction(\PDO $connexion, int $id) {
      // On instancie (créer un nouveau objet) un objet de type PostsGestionnaire()
      $postsGestionnaire = new \App\Modeles\PostsGestionnaire();
      // On lance la méthode findAll de PostsGestionnaire que je met dans $postData
      $postData = $postsGestionnaire->findOneById($connexion, $id);

    // Je charge et je mets dans $author les infos de l'auteur du post que je demande au modèle
    include_once '../app/modeles/authorsModele.php';
    $author = \App\Modeles\AuthorsModele\findOneById($connexion, $post['author_id']);

  // Je charge la vue show dans $content
    GLOBAL $content, $title;
    $title = $post['title'];
    ob_start();
      include '../app/vues/posts/show.php';
    $content = ob_get_clean();
  }

}
