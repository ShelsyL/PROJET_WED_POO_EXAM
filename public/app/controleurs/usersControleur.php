<?php
/*
  ./public/app/controleurs/usersControleur.php
  CONTROLEUR DES USERS
 */
  namespace App\Controleurs\UsersControleur;
  use \App\Modeles\UsersModele;

  function loginFormAction () {
    // Permet qu'une fois connecter si on remet admin dans le lien on reste connecter
    if (isset($_SESSION['user'])):
      header('location: ' . BASE_URL_ADMIN);
    endif;

    GLOBAL $content;
    ob_start();
      include '../app/vues/users/loginForm.php';
    $content = ob_get_clean();
  }

  function loginCheckAction (\PDO $connexion) {
    // On va chercher le user dont le login et le mot de passe correspondent au $_POST
    include_once '../app/modeles/usersModele.php';
    $user = UsersModele\findOneByLoginPassword($connexion, $_POST['login'], $_POST['password']);
    if ($user) {
      // On donne un badge à l'utilisateur
    $_SESSION['user'] = $user;
    // On va rediriger vers le backOffice
    header('location: '. BASE_URL_ADMIN );
    }
    else {
      header('location: '. BASE_URL_PUBLIC .'users/login');
    }
  }
