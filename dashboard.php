<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les changements d'ampoules</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    
</head>
<body>
    <?php 
    require './crud/selection.php';
    ?>
    <nav class="haut">
        <p>Gardien <?= $_SESSION['users'] ?></p>
        <a href="gestion.php"><button type="submit">Ajouter un changement</button></a>
        <a href="login.utilisateur.php"><button class="deconnect">Déconnexion</button></a>
    </nav>
    <div class="container">
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
                    <td><?= $result[$key]['prix'] ?> €</td>
                    <td class="validation">
                    
                    <a href="gestion.php?id=<?= $result[$key]['id'] ?>"><button type="submit">Modifier</button></a>

                        <a href="dashboard.php?page=<?= $currentPage ?>&id=<?= $result[$key]['id'] ?>"><button type="submit" class="supprimer">Supprimer</button></a>
                    <?php 

//error_log(print_r($_GET, 1));
/*
                    if (@$_GET ) { // === $result[$key]['id'] && $currentPage == 'active'?>
                        <div class="alerte" id="alerte">
                            <span>Voulez-vous vraiment supprimer ?<br></span>
                            <div>
                                <a href="./crud/supprimer.php?id=<?= $result[$key]['id'] ?>"><button type="submit" class="confirmation" id="confirmation">Supprimer</button></a>
                                
                                <a href="dashboard.php"><button type="submit"id="annuler" class="annuler">Annuler</button></a>
                            </div>
                        </div>
                    <?php
                    }
                  //  var_dump($_GET['id']);
                  */
                    ?>


                    <!--button type="submit" id="btn-<?= $result[$key]['id'] ?>" class="btn" onclick="getId(this.id)">Supprimer</button-->

                    <!-- <div class="alerte" id="alerte">
                        <span>Voulez-vous vraiment supprimer ?</span><br>
                        <button type="submit" class="supprim" id="supprim-<?= $result[$key]['id'] ?>" onclick="replyId(this.id)">Supprimer</button></a>
                        <button type="submit" id="annuler" class="annuler">Annuler</button></a>
                    </div> -->
                    </td>
                    <?php }  
                     if (@$_GET['id'] > 0 ) { // === $result[$key]['id'] && $currentPage == 'active'?>
                        <div class="alerte" id="alerte">
                            <span>Voulez-vous vraiment supprimer ?<br></span>
                            <div>
                                <a href="./crud/supprimer.php?id=<?= $_GET['id'] ?>"><button type="submit" class="confirmation" id="confirmation">Supprimer</button></a>
                                
                                <a href="dashboard.php?page=<?= $currentPage ?>"><button type="submit"id="annuler" class="annuler">Annuler</button></a>
                            </div>
                        </div>
                        <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>
    <p class="toast" id="toast">L'entrée a bien été supprimer</p>
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
            error_log("pages = ".$pages);
            
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script type="text/javascript">
        Toastify ( { 
  text : "This is a toast" , 
  duration : 3000 , 
  destination : "https://github.com/apvarun/toastify-js" , 
  newWindow : true , 
  close : true , 
  gravity : "top" ,  // `top` ou `bottom` 
  position : "left" ,  // `left`, `center` ou `right` 
  stopOnFocus : true ,  // Empêche le rejet du toast au survol 
  style : { 
    background :"linear-gradient(to right, #00b09b, #96c93d)" , 
  } , 
  onClick : function ( ) { }  // Rappel après clic 
} ) . showToast ( ) ;
$(document).ready(function(){
    $('#confirmation').click(function(){
        $('#toast').toast()})
})
    </script>
    <!-- <script src="main.js"></script> -->
    
</body>
</html>