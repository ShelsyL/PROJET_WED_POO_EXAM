<?php
/*
	./public/app/routeur.php
	ROUTEUR PRINCIPAL
*/
// var_dump($_GET['postId']);

// ROUTES DE POSTS
  // DETAILS D'UN POST
  // PATTERN : ?postId=x
  // CTRL: postControleur
  // ACTION: show
    if (isset($_GET['postId'])):
      include_once '../app/controleurs/postsControleur.php';
      \App\Controleurs\PostsControleur\showAction($connexion, $_GET['postId']);

// ROUTES DES USERS
    elseif (isset($_GET['users'])):
      include_once '../app/routeurs/users.php';

// ROUTE PAR DEFAUT
 // PATTERN : /
 // CTRL: postsControleur
 // ACTION: index
 else :
 include_once '../app/controleurs/postsControleur.php';
 \App\Controleurs\PostsControleur\indexAction($connexion); // On lance l'action indexAction avec des namespaces
endif;
