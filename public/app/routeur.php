<?php

/*
	./public/app/routeur.php
	ROUTEUR PRINCIPAL
*/
use \Noyau\Classes\App;
use \App\Controleurs\PostsControleur;

// var_dump($_GET['postId']);

// ROUTES DE POSTS
  // DETAILS D'UN POST
  // PATTERN : ?postId=x
  // CTRL: postControleur
  // ACTION: show
  if (isset($_GET['postId'])):
      // On instancie un Objet de type PostsControleur
      $postCtrl = new PostsControleur();
      // On lance l'action showAction() de l'objet PostsControleur
      $idPost = $_GET['postId'];
      $postCtrl->showAction($idPost);


// ROUTES DES USERS
    elseif (isset($_GET['users'])):
      include_once '../app/routeurs/users.php';


 // ROUTE PAR DEFAUT
 // PATTERN : /
 // CTRL: postsControleur
 // ACTION: index
  else :
    // On instancie un Objet de type PostsControleur
    $postCtrl = new PostsControleur();
    // On lance l'action indexAction() de l'objet PostsControleur
    $postCtrl->indexAction(['limit' => 5 ]);
  endif;
