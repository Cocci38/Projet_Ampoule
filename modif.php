<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require 'modifier.php'; 

foreach ($result1 as $key => $value) { ?>
<form action="modifier.php" method="get">
        <legend><h2>Modifier un changement d'ampoule</h2></legend>
        <label for="created_at"></label>
        <input type="date" name="created_at" id="created_at" value="<?= $result1[$key]['created_at'] ?>">
        <select name="etage" id="etage" >
            <option value="<?= $result1[$key]['etage'] ?>">RDC</option>
            <option value="<?= $result1[$key]['etage'] ?>">1er étage</option>
            <option value="<?= $result1[$key]['etage'] ?>">2ème étage</option>
            <option value="<?= $result1[$key]['etage'] ?>">3ème étage</option>
            <option value="<?= $result1[$key]['etage'] ?>">4ème étage</option>
            <option value="<?= $result1[$key]['etage'] ?>">5ème étage</option>
            <option value="<?= $result1[$key]['etage'] ?>">6ème étage</option>
            <option value="<?= $result1[$key]['etage'] ?>">7ème étage</option>
            <option value="<?= $result1[$key]['etage'] ?>">8ème étage</option>
            <option value="<?= $result1[$key]['etage'] ?>">9ème étage</option>
            <option value="<?= $result1[$key]['etage'] ?>">10ème étage</option>
            <option value="<?= $result1[$key]['etage'] ?>">11ème étage</option>
        </select>
        <input type="radio" name="position" id="gauche" value="<?= $result1[$key]['position'] ?>">
        <label for="gauche">Côté gauche</label>
        <input type="radio" name="position" id="droite" value="<?= $result1[$key]['position'] ?>">
        <label for="droite">Côté droit</label>
        <input type="radio" name="position" id="fond" value="<?= $result1[$key]['position'] ?>">
        <label for="fond">Au fond</label>
        <label for="prix">Prix</label>
        <input type="number" name="prix" id="prix" value="<?= $result1[$key]['prix'] ?>">

        <a href="../dashboard.php"><button type="submit">Valider</button></a>
        <input type="submit" value="Retour">
    <?php } ?>
    </form>
</body>
</html>