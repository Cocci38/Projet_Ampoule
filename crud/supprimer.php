<?php
session_start();
require_once 'connexion.php';

$id = $_GET['id'];
$delete = $conn->prepare("DELETE  FROM ampoule WHERE id=$id");
$delete->execute();
$supp = $delete->fetchAll();

$_SESSION['supprimer'] == TRUE;
header('location: ../dashboard.php');
?>