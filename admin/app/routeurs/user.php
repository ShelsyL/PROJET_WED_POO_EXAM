<?php
/*
  ./admin/app/routeurs/usersRouteur.php
  ROUTES DES USERS
 */
// use \App\Controleurs\UserContoleur;
include '../app/controleurs/userControleur.php';

switch ($_GET['user']) {

  /*
  DECONNEXION DU USER - LOGOUT
  PATTERN: index.php?user=logout
  CTRL: usersControleur
  ACTION: logout
  */
  case 'logout':
  \App\Controleurs\UserControleur\logoutAction();
  break;

  default:
  // code...
   break;

}
