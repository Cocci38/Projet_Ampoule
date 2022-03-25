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
<nav class="haut">
        
        <img src="./public/media/Utilisateur.png" alt="image-utilisateur" srcset="">
        <p class="gardien"><?= $_SESSION['users'] ?> </p>
        <a href="gestion.php"><button type="submit">Ajouter un changement</button></a>
        <a href="./users/deconnexion.php"><button class="deconnect">Déconnexion</button></a>

    </nav>
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
            <?php  foreach ($result as $key => $value) { ?>
            <tbody>
                <tr>
                    <td><?= $result[$key]['created_at'] ?></td>
                    <?php if ($result[$key]['etage'] == 'rdc'){  ?>
                    <td><?= $result[$key]['etage'] ?></td>
                    <?php }else {?>
                        <td><?= $result[$key]['etage'] ?> étage</td>
                    <?php } ?>
                    <?php if ($result[$key]['position'] == 'fond'){  ?>
                        <td>Au <?= $result[$key]['position'] ?></td>
                    <?php }else {?>
                        <td>A <?= $result[$key]['position'] ?></td>
                    <?php } ?>
                    
                    <td><?= $result[$key]['prix'] ?> €</td>
                    </tr>
            </tbody>
                    <?php 
                    }  ?>

                
        </table>
    </div>
</body>
</html>