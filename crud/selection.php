<?php

require_once 'connexion.php';

$select = $conn->prepare("SELECT * FROM ampoule");
$select->execute();
$result =$select->fetchAll(PDO::FETCH_ASSOC);

print_r($result);


?>