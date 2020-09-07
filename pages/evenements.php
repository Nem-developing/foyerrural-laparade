<!doctype html>
<html lang="en" class="bg-dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="../css/styles.css" rel="stylesheet" type="text/css"/>
        <title>Événements | Foyer Rural - Laparade</title>
    </head>
    <body>
        <!-- Menu -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="../index.php">Foyer Rural - Laparade</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="evenements.php">Événements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="photos.php">Photos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="localisation.php">Localisation</a>
                    </li>
                </ul>
                <a href="https://www.facebook.com/foyerrural.laparade"><p class="text-primary pubfb">Suivez-nous sur Facebook !</p></a>
            </div>
        </nav>


        <!-- Contenue de la page -->
        <div id='page' class='bg-dark text-white'>



            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Heure</th>
                        <th scope="col">Événement</th>
                        <th scope="col">Lieu</th>
                    </tr>
                </thead>
                <tbody>
                    
                    
                    <?php
                    
                    include '../config/config.php';  // Import des informations de connexion à la base de données.
                    // Établissement de la connexion au serveur mysql. + Corecion de l'erreur d'encodage.
                    $cnx = new PDO("mysql:host=$hotedeconnexion;dbname=$basededonnee", "$utilisateur", "$motdepasse", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                    // Commande SQL permetant de récupérer la liste des serveurs actifs.
                    $req = 'SELECT * FROM `actu`;';
                    // Envoie au serveur la commande via le biais des informations de connexion.
                    $res = $cnx->query($req);

                    // Boucle tant qu'il y a de lignes corespondantes à la requettes
                    while ($ligne = $res->fetch(PDO::FETCH_OBJ)) {
                        
                        
                    echo "<tr>
                        <th scope='row'>$ligne->date</th>
                        <th>$ligne->heure</th>
                        <td>$ligne->evenement</td>
                        <td>$ligne->lieu</td>
                    </tr>
                    ";   
                    }
                    ?>
                </tbody>
            </table>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
    <footer>
        <p>&copy;2020 Foyer Rural Laparade - contact@foyerrural-laparade.fr<p>
    </footer>
</html>