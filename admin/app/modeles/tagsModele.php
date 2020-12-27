<?php

  /*
    ./app/modeles/tagsModele.php
    Modèle des tags
  */

    namespace App\Modeles\TagsModele;

    function findAll(\PDO $connexion) {
      $sql = "SELECT *
              FROM tags
              ORDER BY name DESC;";
      $rs = $connexion->query($sql);
      return $rs->fetchAll(\PDO::FETCH_ASSOC);
    }
