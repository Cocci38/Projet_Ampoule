<?php
session_start();
if (!$_SESSION['users']) {
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
                echo "Ajouter un changement d'ampoule";
            } ?></title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>
    <?php
    define("NOMBREETAGE", 10);
    if ($_GET) {
        include './crud/modifier.php';
    } else { ?>
        <div id="container">
            <form action="./crud/ajouter.php" method="post">
                <legend>
                    <h2>Ajouter un changement d'ampoule</h2>
                </legend>
                <label for="created_at">Date du changement</label>
                <input type="date" name="created_at" id="created_at">
                <label for="prix">Prix</label>
                <input type="number" name="prix" id="" step="any">
                <select name="etage" id="etage">
                    <?php
                    for ($i = 0; $i <= NOMBREETAGE; $i++) {
                        if ($i == 0) { ?>
                            <option value=rdc>RDC</option>
                        <?php } elseif ($i == 1) { ?>
                            <option value="<?= $i ?>er"> <?= $i ?>er </option>
                        <?php } else { ?>
                            <option value="<?= $i ?>ème"> <?= $i ?>ème </option>
                    <?php }
                    }
                    ?>
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