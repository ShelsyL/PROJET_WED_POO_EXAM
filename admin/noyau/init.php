<?php
/*
	./admin/noyau/init.php
    FICHIER D'INITIALISATION
*/
session_start();

	require_once '../noyau/constantes.php';

	require_once '../noyau/protect.php';

  // 1. PARAMETRES DE CONNEXIONS - On charge les paramètres
	require_once '../app/config/parametres.php';

  // 2. CONNEXION - On charge la connexion
	require_once '../noyau/connexion.php';

	require_once '../noyau/fonctions.php';
