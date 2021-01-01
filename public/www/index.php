<?php
/*
	./public/www/index.php
    DISPATCHER CENTRAL
*/
// Le role du dispatcher est de charger ...
  // 1. INIT - On charge l'initialisation
  // Le but de init c'est de définir les zones dynamiques et de se connecter à la base de données
	// Plus besoin => require_once '../noyau/init.php';
	define('WEBROOT',__FILE__);
	define('ROOT',dirname(WEBROOT));
	define('DS',DIRECTORY_SEPARATOR);

	// Chargement des paramètres
	require_once '../app/config/parametres.php';

	//Chargement du fichier autoload de vendor
	require_once '../vendor/autoload.php';



	// Démarrage de l'application
	\Noyau\Classes\App::start();

// Pour tester et vérifier qu'il s'agit d'un objt de type PDO
	//var_dump(\Noyau\Classes\App::getConnexion());
// Pour voir le chemin de l'application
	//var_dump(\Noyau\Classes\App::getRoot());

  // 2. ROUTEUR - On charge le routeur
  // Le role du routeur c'est d'hydrater les zones dynamiques
	require_once '../app/routeur.php';

  // 3. TEMPLATE - On charge le template
  // Le Role du template c'est d'afficher les zones dynamiques
	require_once '../app/vues/template/index.php'; // On charge le template
// \Noyau\Classes\App::getTemplate();


	// Fermeture de l'application
	\Noyau\Classes\App::close();

	// Pour tester que la connexion est bien tuée à la fin => NULL
		//var_dump(\Noyau\Classes\App::getConnexion());
