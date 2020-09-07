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
        <link href="../css/photos.css" rel="stylesheet" type="text/css"/>
        <title>Photos | Foyer Rural - Laparade</title>
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
                        <a href='photos.php?lang=eng'><h3 class='text-white flag'>ENG</h3></a>
                        <a href='photos.php?lang=eng'><img src='../images/accueil/british-flag.svg' width='50' class='flag' alt='british-flag'/></a>
                    ";
                    
                } else if ($lang == "eng") {
                    echo "
                        <a href='photos.php'><h3 class='text-white flag-text'>FR</h3></a>
                        <a href='photos.php'><img src='../images/accueil/french-flag.svg' width='50' class='flag' alt='french-flag'/></a>
                        ";
                }?>
                
                    
                

            </div>
        </nav>



        <!-- Contenue de la page -->
        <div id='page' class='bg-dark text-white'>


            <div class="row photos">
                <div class="col-sm-6 align-middle">
                    <div class="card">
                        <div class="card-body bg-dark text-white">
                            <img src="../images/public/116878415_2143159055828586_3196830584497793846_n.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 align-middle">
                    <div class="card align-middle">
                        <div class="card-body bg-dark text-white">
                            <img src="../images/public/118626970_2173158602828631_7770494136678047990_n.jpg">

                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body bg-dark text-white">
                            <img src="../images/public/117060308_2143159105828581_8793734850881241112_n.jpg">

                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body bg-dark text-white">
                            <img src="../images/public/118063453_2160042567473568_633830932628603012_o.jpg">

                        </div>
                    </div>
                </div>

            </div>
        </div>











        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
    <footer>
        <p>&copy;2020 Foyer Rural Laparade - contact@foyerrural-laparade.fr<p>
    </footer>
</html>
