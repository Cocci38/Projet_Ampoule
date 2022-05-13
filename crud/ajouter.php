<?php
session_start();

require_once 'connexion.php';
    $user_id = $_SESSION['users'];

    $user = $conn->prepare("SELECT id_user FROM users WHERE username LIKE :username");
    $user->bindParam(':username', $user_id, PDO::PARAM_STR);
    $user->execute();
    $resultat = $user->fetch(PDO::FETCH_ASSOC);

    //var_dump($resultat);die();
    $id_user = intval($resultat['id_user']);
    //var_dump($id_user);die();

    $created_at = htmlspecialchars($_POST['created_at']);
    $etage = htmlspecialchars($_POST['etage']);
    $position = htmlspecialchars($_POST['position']);
    $prix = htmlspecialchars($_POST['prix']);
    
    $sql = $conn->prepare("INSERT INTO ampoule (
        created_at, etage, position, prix, user_id)
        VALUES(:created_at, :etage, :position, :prix, :user_id)");
    $sql->bindParam('created_at', $created_at, PDO::PARAM_STR);
    $sql->bindParam('etage', $etage, PDO::PARAM_STR);
    $sql->bindParam('position', $position, PDO::PARAM_STR);
    $sql->bindParam('prix', $prix, PDO::PARAM_STR);
    $sql->bindParam('user_id', $id_user, PDO::PARAM_INT);
    $sql->execute();
    echo "C'est ok";
    //print_r($sql);


header('location: ../dashboard.php');
?>