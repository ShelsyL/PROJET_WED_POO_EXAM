<?php
/*
	./public/app/modeles/categoriesModele.php
	MODELE DES CATEGORIES
*/
namespace App\Modeles\CategoriesModele;

// Va chercher tout (Catégories)
function findAll (\PDO $connexion) :array {
	$sql = "SELECT *
					FROM categories
    			ORDER BY name ASC;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC); // On retourne un tableau indéxé de tableau associatif dans $catégories (./app/vues/template/partials/_aside.php)
}
