<?php
    session_start();
    if(!$_SESSION['users']){
        header('Location: login.utilisateur.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if ($_GET) {
    echo 'Modifier une erreur';
} else { 
    echo "Ajouter un changement d'ampoule" ;}?></title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
    <?php

if ($_GET) {
    include './crud/modifier.php';
} else { ?>
<div id="container">
    <form action="./crud/ajouter.php" method="post">
        <legend><h2>Ajouter un changement d'ampoule</h2></legend>
        <label for="created_at">Date du changement</label>
        <input type="date" name="created_at" id="created_at">
        <label for="prix">Prix</label>
        <input type="number" name="prix" id="" step="any">
        <select name="etage" id="etage">
            <option value="rdc">RDC</option>
            <option value="1er">1er étage</option>
            <option value="2ème">2ème étage</option>
            <option value="3ème">3ème étage</option>
            <option value="4ème">4ème étage</option>
            <option value="5ème">5ème étage</option>
            <option value="6ème">6ème étage</option>
            <option value="7ème">7ème étage</option>
            <option value="8ème">8ème étage</option>
            <option value="9ème">9ème étage</option>
            <option value="10ème">10ème étage</option>
            <option value="11ème">11ème étage</option>
        </select>
        
        <input type="radio" name="position" id="gauche" value="gauche">
        <label for="gauche">Côté gauche</label>
        <input type="radio" name="position" id="droite" value="droite">
        <label for="droite">Côté droit</label>
        <input type="radio" name="position" id="fond" value="fond">
        <label for="fond">Au fond</label><br>
        
        <input type="submit" value="Valider">
        <a href="dashboard.php"><input type="button" value="Retour"></a>
    </form>

    <?php
}
?>
</div>
</body>
</html>