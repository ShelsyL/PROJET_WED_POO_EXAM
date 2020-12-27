<?php
/*
  ./admin/app/controleurs/postsControleur.php
 */

 namespace App\Controleurs\PostsControleur;
 use \App\Modeles\PostsModele;

  function indexAction(\PDO $connexion) {
    // Je mets la liste des posts dans $posts
     include_once '../app/modeles/postsModele.php';
     $posts = PostsModele\findAll($connexion);
     GLOBAL $content, $title;
     $title = "Liste des posts";
     ob_start();
       include '../app/vues/posts/index.php';
     $content = ob_get_clean();
 }


  function addFormAction(\PDO $connexion) {
    // Je vais chercher la liste des AUTEURS
    include_once '../app/modeles/auteursModele.php';
    $authors = \App\Modeles\AuteursModele\findAll($connexion);
    // Je vais chercher la liste des CATEGORIES
    include_once '../app/modeles/categoriesModele.php';
    $categories = \App\Modeles\CategoriesModele\findAll($connexion);
    // Je vais chercher la liste des TAGS
     include_once '../app/modeles/tagsModele.php';
     $tags = \App\Modeles\TagsModele\findAll($connexion);
    // Je charge la vue addForm (le formulaire) dans $content
    GLOBAL $content, $title;
    $title = "Ajout d'un post";
    ob_start();
    include '../app/vues/posts/addForm.php';
    $content = ob_get_clean();
  }


  function addAction(\PDO $connexion) {
    // Je demande au modèle d'ajouter le post
    include_once '../app/modeles/postsModele.php';
    $id = PostsModele\insert($connexion, $_POST);
    // Je demande au modèle d'ajouter les tags correspondants
    foreach ($_POST['tags'] as $tagID) {
      $return = PostsModele\insertTagById($connexion, [
        'postID' => $id,
        'tagID' => $tagID
      ]);
    }
    // Je redirige vers la liste des posts
    header('location: ' . BASE_URL_ADMIN . 'posts');
  }

  function deleteAction(\PDO $connexion, int $id) {
    // Je demande au modèle de supprimer les liaisons N-M correspondantes
    include_once '../app/modeles/postsModele.php';
    $return1 = PostsModele\deletePostsHasTagsByPostId($connexion, $id);
    // Je demande au modèle de supprimer le post
    include_once '../app/modeles/postsModele.php';
    $return2 = PostsModele\deleteOneById($connexion, $id);
    // Je redirige vers la liste des posts
    header('location: ' . BASE_URL_ADMIN . 'posts');
  }

  function editFormAction(\PDO $connexion, int $id) {
      // Je demande au modèle de trouver le post correspondant
      include_once '../app/modeles/postsModele.php';
      $post = PostsModele\findOneById($connexion, $id);
      // Je demande au modèle les tags du post
      include_once '../app/modeles/postsModele.php';
      $postTags = PostsModele\findTagsByPostId($connexion, $id);
      // Je vais chercher les auteurs
      include_once '../app/modeles/auteursModele.php';
      $authors = \App\Modeles\AuteursModele\findAll($connexion);
      // Je vais chercher les catégories
      include_once '../app/modeles/categoriesModele.php';
      $categories = \App\Modeles\CategoriesModele\findAll($connexion);
      // Je vais chercher les tags
      include_once '../app/modeles/tagsModele.php';
      $tags = \App\Modeles\TagsModele\findAll($connexion);
      // Je charge la vue editForm dans content
      GLOBAL $content, $title;
      $title = "Edition d'une catégorie";
      ob_start();
        include '../app/vues/posts/editForm.php';
      $content = ob_get_clean();
    }

  function editAction(\PDO $connexion, int $id) {
    // Je demande au modèle de supprimer tous les tags correspondants
    include_once '../app/modeles/postsModele.php';
    $return1 = PostsModele\deletePostsHasTagsByPostId($connexion, $id);
    // Je demande au modèle d'updater le post
    $return2 = PostsModele\updateOneById($connexion, $id, $_POST);
    // Je demande au modèle d'ajouter les tags correspondants
    foreach ($_POST['tags'] as $tagID) {
      $return = PostsModele\insertTagById($connexion, [
        'postID' => $id,
        'tagID' => $tagID
      ]);
    }
    // Je redirige vers la liste des posts
    header('location: ' . BASE_URL_ADMIN . 'posts');
  }
