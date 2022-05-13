<?php

require_once '../crud/connexion.php';

if(isset($_POST['email']) && isset($_POST['password'])){

    $email = htmlspecialchars(strip_tags($_POST['email']));
    $password = htmlspecialchars(strip_tags($_POST['password']));
    $password_bis = htmlspecialchars(strip_tags($_POST['password2']));

    if ($password == $password_bis) {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $modif = $conn->prepare("UPDATE users SET password=:password WHERE email=:email");
        $modif->bindParam(':password', $passwordHash, PDO::PARAM_STR);
        $modif->bindParam(':email', $email, PDO::PARAM_STR);
        $modif->execute();
        header('location: ../login.utilisateur.php');
    }
    // else {
    //     header('location: ../recuperation.php');
    // }
}
?>