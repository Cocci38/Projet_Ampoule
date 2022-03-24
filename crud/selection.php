<?php

require_once 'connexion.php';

// Numéro de page dans l'URL. Si aucun numéro de page alors nous sommes en page 1
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}

// Pour connaitre le nombre d'élément dans notre BDD, on utilise COUNT en sql
$sql3 = 'SELECT COUNT(*) AS id FROM `ampoule`;';
$query = $conn->prepare($sql3);
$query->execute();
$result2 = $query->fetch();
$nbampoule = (int) $result2['id'];

// On détermine le nombre d'élément par page
$parPage = 5;
// On calcule le nombre de pages total
$pages = ceil($nbampoule / $parPage);
// On calcul le 1er élément de la page
$premier = ($currentPage * $parPage) - $parPage;
// Faire la requête sql en utilisant l'instruction LIMIT
$select = $conn->prepare("SELECT * FROM ampoule ORDER BY created_at DESC LIMIT :premier, :parpage;");
$select->bindValue(':premier', $premier, PDO::PARAM_INT);
$select->bindValue(':parpage', $parPage, PDO::PARAM_INT);
$select->execute();
$result =$select->fetchAll(PDO::FETCH_ASSOC);

//print_r($result);


?>