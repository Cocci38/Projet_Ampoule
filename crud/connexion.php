<?php

$servername = 'localhost';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$servername;dbname=ampoules; charset=UTF8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussi";
} catch (PDOException $e){
    echo "Erreur : " . $e->getMessage();
}

?>