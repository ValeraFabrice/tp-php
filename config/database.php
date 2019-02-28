<?php

/*

Connexion à la base de données

Ce fichier permettra de faire la connexion entre PHP et MySQL avec PDO.

*/

define('HOST', 'localhost');
define('DB_NAME', 'tp-php');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$db = new PDO(
    'mysql:host=' . HOST .';dbname=' . DB_NAME . ';charset=utf8',
    DB_USER,
    DB_PASSWORD,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Active les erreurs SQL
        // On récupère tous les résultats en tableau associatif
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);