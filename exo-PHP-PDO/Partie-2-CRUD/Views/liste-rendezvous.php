<?php
require "../Controller/liste-rendezvousController.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Ajouter un patient</title>
</head>
<body>
    
<form action="liste-rendezvous.php" method="post">
<div>
<label for="lastname">Votre nom : </label>
 <input type="text" name="lastname" id="lastname">
 </div>

              <div>
            <label for="firstname">Votre prénom : </label>
            <input type="text" name="firstname" id="firstname">
        </div>

<div>
            <label for="birthdate">Date de naissance : </label>
            <input type="text" name="birthdate" id="birthdate">
</div>
<div>
            <label for="phone">Numéro de téléphone : </label>
            <input type="tel" name="phone" id="phone">
</div>
<div>
            <label for="mail">Adresse mail : </label>
            <input type="mail" name="mail" id="mail">
            </div>
                
            <input type="submit" name="Valider" value="Envoyer">
        </form>

<a href="../index.php">Retour à l'accueil</a>

</body>
</html>