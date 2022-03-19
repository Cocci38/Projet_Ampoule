<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les changements d'ampoules</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" /> -->
</head>
<body>
    <?php 
    require './crud/selection.php';
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
                <td><?= $result[$key]['prix'] ?> €</td>
                <td>
                
                <a href="gestion.php?id=<?= $result[$key]['id'] ?>"><button type="submit">Modifier</button></a>
                <button type="submit" id="btn" class="btn" onclick="click">Supprimer</button>

                <div class="alerte" id="alerte">
                    <span>Voulez-vous vraiment supprimer ?</span>
                    <a href="./crud/supprimer.php?id=<?= $result[$key]['id'] ?>" ><button type="submit" class="supprim" id="supprim">Supprimer</button></a>
                    <button type="submit" id="annuler" class="annuler">Annuler</button></a>
                </div>
                </td>
                <?php }  ?>
            </tr>
        </tbody>
        <tfoot>
            <a href="gestion.php"><button type="button">Ajouter un changement</button></a>
        </tfoot>
    </table>
    <a href="gestion.php"><button type="submit">Ajouter un changement</button></a>
    <script src="main.js"></script>
    <!-- <script src="http://code.jquery.com/jquery-2.0.3.min.js" ></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->
</body>
</html>