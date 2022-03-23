<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération de mot de passe</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
<div id="container">
    <form action="./users/recup.php" method="post">
        <legend><h2>Changer de mot de passe</h2></legend>

        <label for="email"> Email </label>
        <input type="email" name="email" id="email" required>

        <label for="password1"> Nouveau mot de passe  </label>
        <input type="password" name="password" id="password1" required>

        <label for="password2"> Confirmez le mot de passe </label>
        <input type="password" name="password2" id="password2" onblur="passVerif()" required>
        <div id="error"></div>

        <input type="submit" id="envoie" value="Enregistrer">
        <p>J'ai déjà un compte ? <a href="login.utilisateur.php">Je me connecte.</a></p>
    </form>
</div>
<script src="./javascript/verif.js"></script>
</body>
</html>