<?php
require 'connexion-data.php';

if ($_POST) {
    $r = $pdo->query("SELECT * FROM user WHERE email = '$_POST[email]' ");

    if ($r->rowCount() >= 1) {
        $user = $r->fetch(PDO::FETCH_ASSOC);

        // si le mdp poster correspond 
        if(password_verify($_POST['mdp'], $user['mdp'])) {
            // test 
            $content .= '<p>Email + MDP OK</p>';
            //j'enregistre infos dans une session :
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['pseudo'] = $user['pseudo'];
            $_SESSION['email'] = $user['email'];
            // je redirige l'utilisateur vers la page game
            // header() !!! penssez a remplir pour redirection !!!!
        }else {
            //incorrect
            $content .= '<p>Mot de passe incorrect</p>';
        }
    }else {
        $content .= '<p>Email inexistant</p>';
    }
}
