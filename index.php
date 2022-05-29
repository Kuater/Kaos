<?php
require 'auth-connexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kaos.css">
    <title>Kaos</title>
</head>

<body>
    <section class="landingPage">
        <form action="" method="post" class="formConnexion">
            <input type="email" name="email" id="email" placeholder="E-mail" required>
            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required>
            <input type="submit" class="btnConnexion" value="Se connecter">
        </form>
        <a href="formulaire.php"><button class="btnInscription">S'inscrire</button></a>

    </section>

</body>

</html>