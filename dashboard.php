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
    require_once './crud/selection.php';
    ?>
    <table>
        <caption>Historique des changements</caption>
        <thead>
            <tr>
                <th>Date</th>
                <th>Etage</th>
                <th>Position</th>
                <th>Prix</th>
            </tr>
        </thead>
        <?php  foreach ($result as $key => $value) { ?>
        <tbody>
            <tr>
                
                <td><?= $result[$key]['created_at'] ?></td>
                <td><?= $result[$key]['etage'] ?> étage</td>
                <td><?= $result[$key]['position'] ?></td>
                <td><?= $result[$key]['prix'] ?> centimes</td>
                <td>
                    <form action="" method="get"><button value='' name="id"> Modifier</button></form>
                    <form action="./crud/supprimer.php" method="get"><button value='<?= $result[$key]['id'] ?>' name="id"> Supprimer</button></form>
                </td>
                <?php }  ?>
            </tr>
        </tbody>
        <tfoot>
            <a href="ajout_modif.php"></a><button type="button">Ajouter un changement</button>
        </tfoot>
    </table>
</body>
</html>