<?php
    $lang = $_GET['lang'];

?>
<!doctype html>
<html lang="en" class="bg-dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="../css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="../css/localisation.css" rel="stylesheet" type="text/css"/>
        <title>Localisation | Foyer Rural - Laparade</title>
    </head>
    <body>
        <!-- Menu -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="../index.php<?php if ($lang == "eng") {echo "?lang=eng";}?>">Foyer Rural - Laparade</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                            <a class="nav-link" href="../index.php<?php if ($lang == "eng") {echo "?lang=eng";}?>"><?php if(!$lang) {echo "Accueil";} else if ($lang == "eng") {echo "Home";}?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="evenements.php<?php if ($lang == "eng") {echo "?lang=eng";}?>"><?php if(!$lang) {echo "Événements";} else if ($lang == "eng") {echo "Events";}?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="photos.php<?php if ($lang == "eng") {echo "?lang=eng";}?>"><?php if(!$lang) {echo "Photos";} else if ($lang == "eng") {echo "Pictures";}?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="localisation.php<?php if ($lang == "eng") {echo "?lang=eng";}?>"><?php if(!$lang) {echo "Localisation";} else if ($lang == "eng") {echo "Location";}?></a>
                    </li>
                </ul>

                <a href="https://www.facebook.com/foyerrural.laparade"><p class="text-primary pubfb"><?php if(!$lang) {echo "Suivez-nous sur Facebook !";} else if ($lang == "eng") {echo "Follow us on Facebook !";}?></p></a>

                
                <?php if(!$lang) {
                    echo "
                        <a href='localisation.php?lang=eng'><h3 class='text-white flag'>ENG</h3></a>
                        <a href='localisation.php?lang=eng'><img src='../images/accueil/british-flag.svg' width='50' class='flag' alt='british-flag'/></a>
                    ";
                    
                } else if ($lang == "eng") {
                    echo "
                        <a href='localisation.php'><h3 class='text-white flag-text'>FR</h3></a>
                        <a href='localisation.php'><img src='../images/accueil/french-flag.svg' width='50' class='flag' alt='french-flag'/></a>
                        ";
                }?>
                
                    
                

            </div>
        </nav>



        <!-- Contenue de la page -->
        <div id='page' class='bg-dark text-white'>


            <div class="row bg-dark">
                <div class="col-sm-6 bg-dark">
                    <div class="card bg-dark">
                        <div class="card-body bg-dark text-white">
                            <h5 class="card-title">Coups d'R café</h5>
                            <p class="card-text">Jardin publique, 47260 Laparade</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 bg-dark">
                    <div class="card bg-dark">
                        <div class="card-body bg-dark text-white">
                            <h5 class="card-title">Association Foyer Rural</h5>
                            <p class="card-text">Mairie, rue du 8 Mai 1945, 47260 Laparade</p>
                        </div>
                    </div>
                </div>
            </div>



            <center>
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d91205.66013771828!2d0.442545!3d44.409016!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aaf7f042aa9fbb%3A0x40665174815b3a0!2s47260%20Laparade!5e0!3m2!1sfr!2sfr!4v1599432484758!5m2!1sfr!2sfr" width="100%" height="300" frameborder="0" class="carte-litle"></iframe>
                
                
            </center>

        </div>
        







        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
    <footer>
        <p>&copy;2020 Foyer Rural Laparade - contact@foyerrural-laparade.fr<p>
    </footer>
</html>
