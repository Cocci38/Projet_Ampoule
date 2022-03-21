<?php

require_once 'connexion.php';

if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}

$sql3 = 'SELECT COUNT(*) AS id FROM `ampoule`;';
$query = $conn->prepare($sql3);
$query->execute();
$result2 = $query->fetch();
$nbampoule = (int) $result2['id'];

$parPage = 5;

$pages = ceil($nbampoule / $parPage);

$premier = ($currentPage * $parPage) - $parPage;

$select = $conn->prepare("SELECT * FROM ampoule ORDER BY created_at ASC LIMIT :premier, :parpage;");
$select->bindValue(':premier', $premier, PDO::PARAM_INT);
$select->bindValue(':parpage', $parPage, PDO::PARAM_INT);
$select->execute();
$result =$select->fetchAll(PDO::FETCH_ASSOC);

//print_r($result);


?>