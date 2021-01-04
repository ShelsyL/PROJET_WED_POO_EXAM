<?php
/*
	./public/www/index.php
    DISPATCHER CENTRAL
*/
// Le role du dispatcher est de charger ...
  // 1. INIT - On charge l'initialisation
  // Le but de init c'est de définir les zones dynamiques et de se connecter à la base de données
	// Plus besoin => require_once '../noyau/init.php';

use \Noyau\Classes\Template;

	// Chargement des paramètres
	require_once '../app/config/parametres.php';

	//Chargement du fichier autoload de vendor
	require_once '../vendor/autoload.php';


	// Démarrage de l'application
	\Noyau\Classes\App::start();

// Démarrage du Tampon
    Template::startZone();

		// 2. ROUTEUR - On charge le routeur - Role : hydrater les zones dynamiques
    // include '../app/vues/' . $this->_table . './show.php';
    require_once '../app/routeur.php';

// Fin du Tampon
    Template::stopZone('content');


  // 3. TEMPLATE - On charge le template - Role : afficher les zones dynamiques
require_once '../app/vues/template/index.php'; // On charge le template
 // \Noyau\Classes\App::getTemplate();


	// Fermeture de l'application
	\Noyau\Classes\App::close();
