<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
<div id="container">
    <form action="./users/login.php" method="post">
            <legend><h2>Se connecter</h2></legend>

            <label for="email"><b>Email</b></label>
            <input type="email" name="email" id="email" required>

            <label for="password"><b>Mot de passe</b> </label>
            <input type="password" name="password" id="password" required>
            <a href="recuperation.php">Mot de passe oublié ?</a>

            <input type="submit" value="Se connecter">
            <p>Je n'ai pas de compte !<a href="inscription.utilisateur.php">Je m'inscris</a> </p>
        </form>
</div>
</body>
</html>