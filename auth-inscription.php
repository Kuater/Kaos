<?php
require 'connexion-data';
if ($_POST) {
    $erreur = "";

    // si le mail n'est pas présent sur la bdd
    $r = $pdo->query("SELECT * FROM user WHERE email = '$_POST[email]'");
    // si il y a plusieur résultats
    if ($r->rowCount() >= 1) {
        $erreur .= '<p>Email est déja utilisé</p>';
    }

    // je verifie si le pseudo n'est pas déja utilisé 
    $r = $pdo->query("SELECT * FROM user WHERE pseudo = '$_POST[pseudo]'");
    //si il y a plusieurs résultats
    if ($r->rowCount() >= 1) {
        $erreur .= '<p>Pseudo déjà utilisé</p>';
    }

    // gere les probleme d'apostrophe 
    ///////////////////////

    // je hash le mdp
    $_POST['mdp'] = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    if (empty($erreur)) {
        $pdo->exec("INSERT INTO user (pseudo, email, mdp) VALUES ('$_POST[pseudo]', '$_POST[email]', '$_POST[mdp]') ");
    }

    // j'ajoute le contenu de $erreur à l'interieur de $^content
    $content .= $erreur;
}
