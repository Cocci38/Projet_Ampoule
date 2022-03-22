<?php

require_once '../crud/connexion.php';

$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['email']);
$portable = htmlspecialchars($_POST['portable']);
$password = htmlspecialchars($_POST['password']);
$password_bis = htmlspecialchars($_POST['password2']);
// if(password_verify($pass, $password)){
//     echo 'valide';
// }else{
//     echo 'invalide';
// }
if ($password == $password_bis) {
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

$sql = $conn->prepare("INSERT INTO users (
    username, email, portable, password)
    VALUES (:username, :email, :portable, :password)");
    $sql->bindParam(':username', $_POST['username']);
    $sql->bindParam(':email', $_POST['email']);
    $sql->bindParam(':portable', $_POST['portable']);
    $sql->bindParam(':password', $passwordHash);
    $sql->execute();
    echo "C'est ok";

    header('location: ../dashboard.php');
}else{
    echo 'Mot de passe différent';
}
?>