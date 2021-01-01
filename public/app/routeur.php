<?php

use \Noyau\Classes\App;
use \App\Controleurs\PostsControleur;

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

/* OLD : Ecriture procédural
  if (isset($_GET['postId'])):
    include_once '../app/controleurs/postsControleur.php';
    \App\Controleurs\PostsControleur\showAction($connexion, $_GET['postId']);
*/

// NEW : Ecriture Objet
  if (isset($_GET['postId'])):
      // On instancie un Objet de type PostsControleur
      $postCtrl = new App\Controleurs\PostsControleur();
      // On lance l'action showAction() de l'objet PostsControleur
      $postCtrl->showAction($_GET['postId']);


// ROUTES DES USERS
    elseif (isset($_GET['users'])):
      include_once '../app/routeurs/users.php';

 // ROUTE PAR DEFAUT
 // PATTERN : /
 // CTRL: postsControleur
 // ACTION: index

 /* OLD : Ecriture procédural
  else :
    include_once '../app/controleurs/postsControleur.php';
    \App\Controleurs\PostsControleur\indexAction($connexion); // On lance l'action indexAction avec des namespaces
endif;
*/

// NEW : Ecriture Objet
  else :
    // Objet de type PostsControleur avec 2 méthodes (indexAction et showAction)
    $postCtrl = new PostsControleur();
    // On lance l'action indexAction() de l'objet PostsControleur
    $postCtrl->indexAction();
  endif;
