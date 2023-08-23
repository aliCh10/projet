<?php
$host = 'localhost';
$db = 'datalocation';
$login = 'root';
$mdp = '';
try {    
    $pdo = new PDO("mysql:host=$host;dbname=$db",$login,$mdp);
    echo 'connexion reussie';
} catch (PDOException $e) {
    echo "erreur".$e->getMessage();
}
