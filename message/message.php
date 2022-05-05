<?php

require_once '../crud/connexion.php';

@$recherche=$_GET["recherche"];
@$envoyer=$_GET["envoyer"];

if(isset($envoyer)&& !empty(trim($recherche))){
$sql4 = $conn->prepare('SELECT created_at, message, date, username FROM messages
JOIN ampoule ON messages.id_message = ampoule.message_id
JOIN users ON messages.user_id = users.id_user
WHERE MATCH (message) AGAINST ( ' . $recherche . ' )');
$sql4->execute();
$resultat3 =$sql4->fetchAll(PDO::FETCH_ASSOC);
}


?>