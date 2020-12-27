<?php
/*
	./admin/app/controleurs/tagsControleur.php
    Controleur des tags
*/

namespace App\Controleurs\TagsControleur;
use \App\Modeles\TagsModele;

function indexAction(\PDO $connexion) {
  include_once '../app/modeles/tagsModele.php';
  $tags = TagsModele\findAll($connexion);

  GLOBAL $content, $title;
  $title = "Liste des tags";
  ob_start();
    include '../app/vues/tags/index.php';
  $content = ob_get_clean();
}
