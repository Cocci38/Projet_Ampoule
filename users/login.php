<?php
// On débute la session
session_start();

require_once '../crud/connexion.php';

if(isset($_POST['email']) && isset($_POST['password']))
{
    // Pour éliminer les risques d'injection
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    if($email !== "" && $password !==""){
        $requete = $conn->prepare("SELECT * FROM users WHERE email=:email");
        $requete->bindParam(':email', $email);
        $requete->execute();
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        $row = $requete->rowCount();
        // rowCount — Retourne le nombre de lignes affectées par le dernier appel à la fonction PDOStatement::execute()
        if ($row == 1) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // filter_var — Filtre une variable avec un filtre spécifique
            // FILTER_VALIDATE_EMAIL — Valide une adresse de courriel (Filtre de validation)
                if($resultat){
                    $passwordHash = $resultat['password'];
                    if(password_verify($password, $passwordHash)){             
                        echo 'valide';
                        $_SESSION['users'] = $resultat['username'];
                        $_SESSION['user_id'] = $resultat['id'];
                        header('location: ../dashboard.php');
                    }else{
                    header('location: ../login.utilisateur.php?login_err=password');
                    echo 'invalide';
                    }
                }
                }else {
                    header('location: ../login.utilisateur.php?login_err=email');
                }
            }else {
                    header('location: ../login.utilisateur.php?login_err=already');
                }
            }else{
                header('location: ../login.utilisateur.php');
        }
}
        
    ?>