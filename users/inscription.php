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
    $sql->bindParam(':username', $username, PDO::PARAM_STR);
    $sql->bindParam(':email', $email, PDO::PARAM_STR);
    $sql->bindParam(':portable', $portable, PDO::PARAM_STR);
    $sql->bindParam(':password', $passwordHash, PDO::PARAM_STR);
    $sql->execute();
    echo "C'est ok";

    header('location: ../dashboard.php');
}else{
    echo 'Mot de passe différent';
}
?>