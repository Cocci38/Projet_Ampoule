<?php

require_once 'connexion.php';

if(@$_POST){
    extract(@$_POST);
}else{
    $id = @$_GET['id'];
}

$id = $_GET['id'];

$select1 = $conn->prepare("SELECT * FROM ampoule WHERE id=$id");
$select1->execute();
$result1 = $select1->fetchAll(PDO::FETCH_ASSOC);

print_r($result1);


$modif = $conn->prepare("UPDATE ampoule SET created_at=:created_at, etage=:etage, position=:position, prix=:prix WHERE id=$id");
$modif->bindParam('created_at', $created_at, PDO::PARAM_STR);
$modif->bindParam('etage', $etage, PDO::PARAM_STR);
$modif->bindParam('position', $position, PDO::PARAM_STR);
$modif->bindParam('prix', $prix, PDO::PARAM_INT);
$modif->execute();

$update = $modif->fetchAll();






?>