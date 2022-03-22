<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
<div id="container">
    <form action="./users/inscription.php" method="post">
        <legend><h2>Créer un compte</h2></legend>

        <label for="username">   Votre nom complet </label>
        <input type="text" name="username" id="username" required>

        <label for="email"> Email </label>
        <input type="email" name="email" id="email" required>

        <label for="portable">  Votre numéro de portable   </label>
        <input type="tel" name="portable" id="portable" required>

        <label for="password1"> Mot de passe  </label>
        <input type="password" name="password" id="password1" required>

        <label for="password2"> Confirmez le mot de passe </label>
        <input type="password" name="password2" id="password2" required>

        <input type="submit" value="Enregistrer">
        <p>J'ai déjà un compte ? <a href="login.utilisateur.php">Je me connecte.</a></p>
    </form>
</div>
<script src="./javascript/verif.js"></script>
</body>
</html>