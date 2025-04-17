<?php

try {
    // Création d'une connexion PDO (PHP Data Objects) pour interagir avec la base de données.
    // La classe PDO fournit une façon moderne, flexible et sécurisée d'accéder aux bases de données.
    $connexion = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);

    // Bonne pratique : configurer les attributs PDO pour mieux gérer les erreurs.
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Active la gestion des exceptions.

} catch (PDOException $e) {
    // Gestion des erreurs en cas de problème avec la connexion à la base de données.
    // $e->getMessage() contient le message d'erreur détaillé fourni par PDO.
    echo $e->getMessage(); // Affiche le message d'erreur pour le débogage.
    echo "C'est bien ballot mais y a un stuut! ti"; // Message humoristique personnalisé pour informer de l'erreur.
}