<?php

require_once '../crud/connexion.php';

$pass = $_POST ['password'];
$password = password_hash($pass, PASSWORD_DEFAULT);
if(password_verify($pass, $password)){
    echo 'valide';
}else{
    echo 'invalide';
}

$sql = $conn->prepare("INSERT INTO users (
    username, email, portable, password)
    VALUES (:username, :email, :portable, :password)");
    $sql->bindParam(':username', $_POST['username']);
    $sql->bindParam(':email', $_POST['email']);
    $sql->bindParam(':portable', $_POST['portable']);
    $sql->bindParam(':password', $password);
    $sql->execute();
    echo "C'est ok";

    header('Location: ./dashboard.php');

?>