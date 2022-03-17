<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <legend><h2>Ajouter un changement d'ampoule</h2></legend>

        <label for="created_at"></label>
        <input type="datetime" name="created_at" id="date">

        <select name="etage" id="">
            <option value="rdc">RDC</option>
            <option value="1etage">1er étage</option>
            <option value="2etage">2ème étage</option>
            <option value="3etage">3ème étage</option>
            <option value="4etage">4ème étage</option>
            <option value="5etage">5ème étage</option>
            <option value="6etage">6ème étage</option>
            <option value="7etage">7ème étage</option>
            <option value="8etage">8ème étage</option>
            <option value="9etage">9ème étage</option>
            <option value="10etage">10ème étage</option>
            <option value="11etage">11ème étage</option>
        </select>
        
        <input type="radio" name="position" id=""> Côté gauche
        <input type="radio" name="position" id="">Côté droit
        <input type="radio" name="position" id="">Au fond
        
    </form>
</body>
</html>