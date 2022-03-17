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
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <form action="" method="get"><button value='' name="id"> Modifier</button></form>
                    <form action="" method="get"><button value='' name="id"> Supprimer</button></form>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <a href="ajout_modif.php"></a><button type="button">Ajouter un changement</button>
        </tfoot>
    </table>
</body>
</html>