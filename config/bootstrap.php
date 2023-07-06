<?php

/**
 * ------------------------------------------------------------------
 *                    L'amorceur de l'application
 * 
 * Ses rôles :
 *        -Charger les raccourcie (constantes)
 *        -Charger les variables d'environnement
 *        -Charger la configuration système
 *        -Charger la configuration session
 *        -Charger le monolog
 * -------------------------------------------------------------------
 */


// Chargement des constantes
require __DIR__ . "/constants.php";


//  Chargement des variables d'environnement
$envFile = parse_ini_file(ROOT . "/../env.conf");

var_dump($envFile);
