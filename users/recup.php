<?php

require_once '../crud/connexion.php';

if(isset($_POST['email']) && isset($_POST['password'])){

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_bis = htmlspecialchars($_POST['password2']);

    if ($password == $password_bis) {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $modif = $conn->prepare("UPDATE users SET password=:password WHERE email=:email");
        $modif->bindParam(':password', $passwordHash, PDO::PARAM_STR);
        $modif->bindParam(':email', $email, PDO::PARAM_STR);
        $modif->execute();
        echo "c'est ok";
    }else {
        echo 'erreur';
    }
}
?>