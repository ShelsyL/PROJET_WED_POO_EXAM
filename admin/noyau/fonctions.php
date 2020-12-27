<?php
/*
 ./admin/noyau/fonctions.php
*/
namespace Noyau\Fonctions;

// Fonction qui permet de slugifier (titre, ..)
function slugify(string $str) :string {
		   return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
		 }

// Fonction qui permet de tronquer le texte
function tronquer(string $chaine, int $nbreCaracteres = 200) :string {
	if(strlen($chaine) > $nbreCaracteres):
		$positionEspace = strpos($chaine, ' ', $nbreCaracteres);
		return substr($chaine, 0, $positionEspace);
	else:
		return $chaine;
	endif;
}
