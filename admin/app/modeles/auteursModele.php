<?php
/*
  ./admin/app/modeles/auteursModele.php
  Modèle des auteurs
 */
 namespace App\Modeles\AuteursModele;

 // Va chercher toute les catégories, trié par ordre id
  function findAll(\PDO $connexion) :array {
    $sql = "SELECT *
            FROM authors
            ORDER BY firstname ASC;";

    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC); // => Ce return va se retrouver dans postsControleurs et PAS dans le Auteurscontroleur
  }
