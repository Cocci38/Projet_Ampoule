<?php

require_once 'connexion.php';
    $created_at = htmlspecialchars($_POST['created_at']);
    $etage = htmlspecialchars($_POST['etage']);
    $position = htmlspecialchars($_POST['position']);
    $prix = htmlspecialchars($_POST['prix']);

    $sql = $conn->prepare("INSERT INTO ampoule (
        created_at, etage, position, prix)
        VALUES(:created_at, :etage, :position, :prix)");
    $sql->bindParam('created_at', $created_at, PDO::PARAM_STR);
    $sql->bindParam('etage', $etage, PDO::PARAM_STR);
    $sql->bindParam('position', $position, PDO::PARAM_STR);
    $sql->bindParam('prix', $prix, PDO::PARAM_STR);
    $sql->execute();
    echo "C'est ok";
    //print_r($sql);


header('location: ../dashboard.php');
?>