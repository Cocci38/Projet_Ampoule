
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require 'connexion.php';


//print_r($_GET);
$id = $_GET['id'];

    $select1 = $conn->prepare("SELECT * FROM ampoule WHERE id=$id");
    $select1->execute();
    $result1 = $select1->fetchAll(PDO::FETCH_ASSOC);

//print_r($result1);

if (@$_POST) {
    extract(@$_POST);

$modif = $conn->prepare("UPDATE ampoule SET created_at=:created_at, etage=:etage, position=:position, prix=:prix WHERE id=$id");
$modif->bindParam(':created_at', $created_at, PDO::PARAM_STR);
$modif->bindParam(':etage', $etage, PDO::PARAM_STR);
$modif->bindParam(':position', $position, PDO::PARAM_STR);
$modif->bindParam(':prix', $prix, PDO::PARAM_STR);
$modif->execute();
//echo "c'est ok";
}

foreach ($result1 as $key => $value) { ?>
    <form action="" method="post">
            <legend><h2>Modifier un changement d'ampoule</h2></legend>
            <label for="created_at"></label>
            <input type="date" name="created_at" id="created_at" value="<?= $result1[$key]['created_at'] ?>">
            
            <select name="etage" id="etage" >
                <option value="rdc"  <?= ($result1[$key]['etage'] =='rdc') ? 'selected=selected' : '' ?>>RDC</option>
                <option value="1er"<?= ($result1[$key]['etage']=='1er') ? 'selected=selected' : ''?>>1er étage</option>
                <option value="2ème" <?= ($result1[$key]['etage']=='2ème') ? 'selected=selected' : ''?>>2ème étage</option>
                <option value="3ème" <?= ($result1[$key]['etage']=='3ème') ? 'selected=selected' : ''?>>3ème étage</option>
                <option value="4ème" <?= ($result1[$key]['etage']=='4ème') ? 'selected=selected' : ''?>>4ème étage</option>
                <option value="5ème" <?= ($result1[$key]['etage']=='5ème') ? 'selected=selected' : ''?>>5ème étage</option>
                <option value="6ème" <?= ($result1[$key]['etage']=='6ème') ? 'selected=selected' : ''?>>6ème étage</option>
                <option value="7ème" <?= ($result1[$key]['etage']=='7ème') ? 'selected=selected' : ''?>>7ème étage</option>
                <option value="8ème" <?= ($result1[$key]['etage']=='8ème') ? 'selected=selected' : ''?>>8ème étage</option>
                <option value="9ème" <?= ($result1[$key]['etage']=='9ème') ? 'selected=selected' : ''?>>9ème étage</option>
                <option value="10ème" <?= ($result1[$key]['etage']=='10ème') ? 'selected=selected' : ''?>>10ème étage</option>
                <option value="11ème" <?= ($result1[$key]['etage']=='11ème') ? 'selected=selected' : ''?>>11ème étage</option>
            </select>
            <input type="radio" name="position" id="gauche" value="gauche" <?= ($result1[$key]['position']=="gauche") ? "checked" : '' ?>>
            <label for="gauche">Côté gauche</label>
            <input type="radio" name="position" id="droit" value="droite" <?= ($result1[$key]['position']=="droite") ? "checked" : ''?>>
            <label for="droite">Côté droit</label>
            <input type="radio" name="position" id="fond" value="fond" <?= ($result1[$key]['position']=="fond")  ? "checked" : '' ?>>
            <label for="fond">Au fond</label>
            <label for="prix">Prix</label>
            <input type="number" name="prix" id="" step="any" value="<?= $result1[$key]['prix'] ?>">
    
            <button type="submit">Valider</button>
            <a href="dashboard.php"><button type="button">Retour</button></a>
        <?php } ?>
        </form>
<?php

if ($_POST) {
    header('location: dashboard.php');
}
?>
</body>
</html>