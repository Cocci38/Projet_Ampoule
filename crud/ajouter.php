<?php

require_once 'connexion.php';


    $sql = $conn->prepare("INSERT INTO ampoule (
        created_at, etage, position, prix)
        VALUES(:created_at, :etage, :position, :prix)");
    $sql->bindParam('created_at', $_POST['created_at']);
    $sql->bindParam('etage', $_POST['etage']);
    $sql->bindParam('position', $_POST['position']);
    $sql->bindParam('prix', $_POST['prix']);
    $sql->execute();
    echo "C'est ok";
    //print_r($sql);


header('location: ../dashboard.php');
?>