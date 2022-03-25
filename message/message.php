<?php

$sql4 = $conn->prepare('SELECT created_at, message, date, username FROM `messages` 
JOIN `ampoule` ON messages.id = ampoule.message_id
JOIN `users` ON messages.user_id = users.id
WHERE MATCH (message) AGAINST ("intervention")');
$sql4->execute();
$recherche =$sql4->fetchAll(PDO::FETCH_ASSOC);



?>