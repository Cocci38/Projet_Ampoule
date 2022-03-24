<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les changements d'ampoules</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" /> -->
</head>
<body>

    <?php 
    require './crud/selection.php';
    ?>
    <nav class="haut">
        
        <img src="./public/media/Utilisateur.png" alt="image-utilisateur" srcset="">
        <p class="gardien"><?= $_SESSION['users'] ?> </p>
        <a href="gestion.php"><button type="submit">Ajouter un changement</button></a>
        <a href="login.utilisateur.php"><button class="deconnect">Déconnexion</button></a>

    </nav>
    <div class="container">
        <table>
            <caption>Historique des changements</caption>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Etages</th>
                    <th>Position</th>
                    <th>Prix</th>
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
                    <td class="validation">
                    
                    <a href="gestion.php?id=<?= $result[$key]['id'] ?>"><button type="submit">Modifier</button></a>

                        <a href="dashboard.php?page=<?= $currentPage ?>&id=<?= $result[$key]['id'] ?>"><button type="submit" class="supprim">Supprimer</button></a>

                    <!-- <button type="submit" id="btn-<?= $result[$key]['id'] ?>" class="btn" onclick="getId(this.id)">Supprimer</button> -->

                    <!-- <div class="alerte" id="alerte">
                        <span>Voulez-vous vraiment supprimer ?</span><br>
                        <button type="submit" class="supprim" id="supprim-<?= $result[$key]['id'] ?>" onclick="replyId(this.id)">Supprimer</button></a>
                        <button type="submit" id="annuler" class="annuler">Annuler</button></a>
                    </div> -->
                    </td>
                    </tr>
            </tbody>
                    <?php 
                    }  
                        if (@$_GET['id'] > 0 ) {?>
                        <div class="alerte" id="alerte">
                            <span>Voulez-vous vraiment supprimer ?<br></span>
                            <div>
                                <a href="./crud/supprimer.php?id=<?= $_GET['id'] ?>"><button type="submit" class="confirmation" id="confirmation" >Supprimer</button>
                                <a href="dashboard.php?page=<?= $currentPage ?>"><button type="submit"id="annuler" class="annuler">Annuler</button></a>
                            </div>
                        </div>
                        <?php } ?>
                
        </table>
    </div>
            <!--p class="toast" id="toast">L'entrée a bien été supprimée</p-->
    
    <nav>
        <ul class="pagination">
            <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
            <?php if ($currentPage  >1) : ?> 
                <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                <a href="./dashboard.php?page=<?= $currentPage - 1 ?>" class="page-link">Précédent</a>
            </li>
            <?php else : ?>
                <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                <a href="./dashboard.php?page=<?= $currentPage?>" class="page-link">Précédent</a>
            </li>
            <?php endif ?>

            <?php for($page = 1;  $page <= $pages;  $page++): ?>
            <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                    <a href="./dashboard.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                </li>
            <?php endfor ?>

            <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
            <?php
            if ($currentPage <= $pages -1) : ?>
            <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                <a href="./dashboard.php?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
            </li>
            <?php else : ?>
                <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                <a href="./dashboard.php?page=<?= $currentPage ?>" class="page-link">Suivante</a>
            </li>
            <?php endif ?>
        </ul>
    </nav>
    <!-- <script src="http://code.jquery.com/jquery-2.0.3.min.js" ></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    
    <?php  if(isset($_SESSION['supprimer']) && $_SESSION['supprimer'] == true) { 
        ?>
        <script type="text/javascript">
                $(function() {
                    toastr.success('Suppression réussie', 'Test', {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-center",
            "preventDuplicates": false,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            });
	});
</script>
    <?php } $_SESSION['supprimer'] == FALSE?> -->
    <!-- <script src="./javascript/toast.js"></script> -->
    
</body>
</html>