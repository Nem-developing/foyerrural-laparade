<?php

    /*  
     *  =========================================================================
     *
     *  Veuillez spécifiez les informations de connection à votre base de donnée.
     * 
     *  =========================================================================
     */ 

    $hotedeconnexion = "127.0.0.1"; // 127.0.0.1 = Localhost
    $basededonnee = "mabasededonnees";
    $utilisateur = "monutilisateur";
    $motdepasse = "unmotdepassehypersécurisé";


    // Tentative de connexion au seveur de bases de données.
    $connexion = mysqli_connect($hotedeconnexion, $utilisateur, $motdepasse, $basededonnee);
    
    // Affichage d'un message d'erreur si il y a un soucis avec l'établissement du lien entre PHP et MYSQL - MARIADB
    if(!$connexion) {
        echo("Problème de connexion à la base de données ! Vérifiez les informations saisies dans la configuration.");
    }
?>
