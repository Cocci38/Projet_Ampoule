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

        <label for="username"><b> Votre nom complet</b></label>
        <input type="text" name="username" id="username" required>

        <label for="email"><b>Email</b></label>
        <input type="email" name="email" id="email" required>

        <label for="portable"><b>Votre numéro de portable</b></label>
        <input type="tel" name="portable" id="portable" required>

        <label for="password1"><b>Mot de passe</b></label>
        <input type="password" name="password" id="password1" required>

        <label for="password2"><b>Confirmez le mot de passe</b></label>
        <input type="password" name="password" id="password2" required>

        <input type="submit" value="Enregistrer">
    </form>
</div>
</body>
</html>