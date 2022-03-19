
<?php

require_once 'connexion.php';




$id = $_GET['id'];
$delete = $conn->prepare("DELETE  FROM ampoule WHERE id=$id");
$delete->execute();
$supp = $delete->fetchAll();

header('location: ../dashboard.php');
?>