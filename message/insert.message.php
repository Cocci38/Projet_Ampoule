<?php
session_start();
require_once '../crud/connexion.php';

    $id= $_GET['id'];

    $sql = $conn->prepare("INSERT INTO messages (
        user_id, message)
        VALUES($id, :message)");
    $sql->bindParam('user_id', $id);
    $sql->bindParam('message', $_POST['message']);
    $sql->execute();
    $result=$conn->lastInsertId();
    // echo "C'est ok";

    // echo $result;

    $sth = $conn->prepare("UPDATE ampoule SET message_id= :message_id WHERE Id=$id");

    $sth->bindParam(':message_id',$result);
    $sth->execute();
?>