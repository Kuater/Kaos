<?php
require 'auth-inscription.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kaos.css">
    <title>Document</title>
</head>

<body>
    <div class="formulaire">
        <form method="post" class="formulaireInscription">
            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" size="50" required>
            <input type="email" name="email" id="email" placeholder="E-mail" size="50" required>
            <input type="password" name="mdp" id="mdP" placeholder="Mot de passe" size="50" required>
            <input type="submit" value="S'inscrire" class="btnInscription">
        </form>
    </div>
    <a href="index.php" class="dejaInscrit">Déja inscrit</a>

</body>

</html>