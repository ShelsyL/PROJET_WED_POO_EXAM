<?php
/*
  ./public/app/modeles/usersModele.php
  MODELE DES USERS
 */

  namespace App\Modeles;

  class UsersGestionnaire {

    // On récupère le login et le password, en chaine de caractère
    function findOneByLoginPassword(\PDO $connexion, string $login, string $password) {
      $sql = "SELECT *
              FROM users
              WHERE login = :login
                AND password = :password;";
      $rs = $connexion->prepare($sql);
      $rs->bindValue(':login', $login, \PDO::PARAM_STR);
      $rs->bindValue(':password', $password, \PDO::PARAM_STR);
      $rs->execute();
      $user = return $rs->fetch(\PDO::FETCH_ASSOC);
      return new Users($user);
    }

  }
