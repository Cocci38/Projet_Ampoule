<?php session_start();
if(!$_SESSION['users']){
    header('Location: login.utilisateur.php');
} ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message d'intervention</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
<?php 
require_once './crud/connexion.php';
//require_once './message/message.php';
@$recherche=$_GET["recherche"];
@$envoyer=$_GET["envoyer"];

if(isset($envoyer)&& !empty(trim($recherche))){
$sql4=$conn->prepare("SELECT created_at, message, date, username FROM messages
JOIN ampoule ON messages.id = ampoule.message_id
JOIN users ON messages.user_id = users.id
WHERE MATCH (message) AGAINST ( ' $recherche ' )");
$sql4->execute();
$resultat4=$sql4->fetchAll(PDO::FETCH_ASSOC);
$afficher='oui';
}
?>
<nav class="haut">
        <img src="./public/media/Utilisateur.png" alt="image-utilisateur" srcset="">
        <p class="gardien"><?= $_SESSION['users'] ?> </p>
        <a href="dashboard.php"><button type="submit">Retour sur le dashboard</button></a>
        <a href="./users/deconnexion.php"><button class="deconnect">Déconnexion</button></a>
    </nav>
    <div class="container" id="container">
        
        <form method="GET">
            <legend><h2>Chercher un message</h2></legend>
            <label for="message">Entrez un mot clef</label>
            <input type="search" name="recherche">
            <input type="submit" name="envoyer" value="Rechercher">
        </form>
    </div>
    <div class="container">
        <table>
            <caption>Message d'intervention</caption>
            <thead>
                <tr>
                    <th>Date du message</th>
                    <th>Message</th>
                    <th>Auteur</th>
                    <th>Date de l'intervention</th>
                </tr>
            </thead>
            <?php if (@$afficher=='oui'){?>
            <?php  for($i=0;$i<count($resultat4);$i++) { ?>
            <tbody>
                <tr>
                    <td><?= $resultat4[$i]['date'] ?></td>
                    <td><?= $resultat4[$i]['message'] ?></td>
                        <td><?= $resultat4[$i]['username'] ?></td>
                    <td><?= $resultat4[$i]['created_at'] ?></td>
                    </tr>
            </tbody>
                    <?php 
                    }  ?>
                    <?php 
                    }  ?>
        </table>
    </div>
</body>
</html>