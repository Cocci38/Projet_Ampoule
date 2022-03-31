<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
<nav class="haut">
        
        <img src="./public/media/Utilisateur.png" alt="image-utilisateur" srcset="">
        <p class="gardien"><?= $_SESSION['users'] ?></p>
        <a href="dashboard.php"><button type="submit">Retour sur le dashboard</button></a>
        <a href="intervention.message.php"><button type="submit">Voir les messages</button></a>
        <a href="./users/deconnexion.php"><button class="deconnect">Déconnexion</button></a>

    </nav>

<div id="container">
    <form action="" method="post">
    <legend><h2>Mettre un message d'intervention</h2></legend>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Ecrire ici"></textarea>
        <input type="hidden" name="user_id" value="<?= $_SESSION['users'];?>">
        <input type="submit" name="envoyer" value="Valider">
        <a href="dashboard.php"><input type="button" value="Retour"></a>
    </form>
</div>
    <?php
    require_once './crud/connexion.php';
    echo $_SESSION['user_id'];
    if (isset($_POST['envoyer'])) {
    $id= $_GET['id'];

    $sql = $conn->prepare("INSERT INTO messages (
        user_id, message)
        VALUES(:user_id, :message)");
    $sql->bindParam('user_id', $_SESSION['user_id'], PDO::PARAM_INT);
    $sql->bindParam('message', $_POST['message'], PDO::PARAM_STR);

    $sql->execute();
    $result=$conn->lastInsertId();
    echo "C'est ok";

    echo $result;

    $sth = $conn->prepare("UPDATE ampoule SET user_id=:user_id, message_id= :message_id WHERE Id=$id");
    $sth->bindParam(':user_id',$_SESSION['user_id'], PDO::PARAM_INT);
    $sth->bindParam(':message_id',$result, PDO::PARAM_INT);
    $sth->execute();
    }
    ?>
</body>
</html>