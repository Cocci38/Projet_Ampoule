<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les changements d'ampoules</title>
</head>
<body>
    <?php 
    session_start();
    require './crud/selection.php';
    ?>
    <table>
        <caption>Historique des changements</caption>
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Etage</th>
                <th>Position</th>
                <th>Prix</th>
            </tr>
        </thead>
        <?php  foreach ($result as $key => $value) { ?>
        <tbody>
            <tr>
            <td><?= $result[$key]['id'] ?></td>
                <td><?= $result[$key]['created_at'] ?></td>
                <td><?= $result[$key]['etage'] ?> étage</td>
                <td><?= $result[$key]['position'] ?></td>
                <td><?= $result[$key]['prix'] ?> centimes</td>
                <td>
                <a href="modifier.php?id=<?= $result[$key]['id'] ?>"><button type="submit">Modifier</button></a>
                <a href="./crud/supprimer.php?id=<?= $result[$key]['id'] ?>"><button type="submit">Supprimer</button></a>
                </td>
                <?php }  ?>
            </tr>
        </tbody>
        <tfoot>
            <a href="ajout_modif.php"><button type="button">Ajouter un changement</button></a>
        </tfoot>
    </table>
    <a href="ajout_modif.php"><button type="submit">Ajouter un changement</button></a>
</body>
</html>