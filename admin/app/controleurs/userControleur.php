<?php
/*
	./admin/app/controleurs/usersControleur.php
    Controleur des users
*/

namespace App\Controleurs\UserControleur;
// use \App\Modeles\Users;

function logoutAction() {
  // Je tue la variable de session 'user'
  unset($_SESSION['user']);
  // Je redirige vers le site public
  header('location: ' . BASE_URL_PUBLIC . 'users/login');
}
