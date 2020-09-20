<?php
    $lang = $_GET['lang'];

?>


<!doctype html>
<html lang="en" class="bg-dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <title>Foyer Rural - Laparade</title>
    </head>
    <body>
        <!-- Menu -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html<?php if ($lang == "eng") {echo "?lang=eng";}?>">Foyer Rural - Laparade</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                            <a class="nav-link" href="index.php<?php if ($lang == "eng") {echo "?lang=eng";}?>"><?php if(!$lang) {echo "Accueil";} else if ($lang == "eng") {echo "Home";}?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/evenements.php<?php if ($lang == "eng") {echo "?lang=eng";}?>"><?php if(!$lang) {echo "Événements";} else if ($lang == "eng") {echo "Events";}?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/photos.php<?php if ($lang == "eng") {echo "?lang=eng";}?>"><?php if(!$lang) {echo "Photos";} else if ($lang == "eng") {echo "Pictures";}?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/localisation.php<?php if ($lang == "eng") {echo "?lang=eng";}?>"><?php if(!$lang) {echo "Localisation";} else if ($lang == "eng") {echo "Location";}?></a>
                    </li>
                </ul>

                <a href="https://www.facebook.com/foyerrural.laparade"><p class="text-primary pubfb"><?php if(!$lang) {echo "Suivez-nous sur Facebook !";} else if ($lang == "eng") {echo "Follow us on Facebook !";}?></p></a>

                
                <?php if(!$lang) {
                    echo "
                        <a href='index.php?lang=eng'><h3 class='text-white flag'>ENG</h3></a>
                        <a href='index.php?lang=eng'><img src='images/accueil/british-flag.svg' width='50' class='flag' alt='british-flag'/></a>
                    ";
                    
                } else if ($lang == "eng") {
                    echo "
                        <a href='index.php'><h3 class='text-white flag-text'>FR</h3></a>
                        <a href='index.php'><img src='images/accueil/french-flag.svg' width='50' class='flag' alt='french-flag'/></a>
                        ";
                }?>
                
                    
                

            </div>
        </nav>

        <!-- Carrousel -->

        <div id="carouselExampleInterval" class="carousel slide bg-dark" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/accueil/20200906_143655.jpg" class="d-block w-100" alt="Image d'illustration des fètes organisées par l'association Foyer Rural de Laprade">
                </div>
                <div class="carousel-item">
                    <img src="images/accueil/FB_IMG_1599394931190-cp.jpg" class="d-block w-100" alt="Image d'illustration des fètes organisées par l'association Foyer Rural de Laprade">
                </div>
                <div class="carousel-item">
                    <img src="images/accueil/FB_IMG_1599395498779.jpg" class="d-block w-100" alt="Image d'illustration des fètes organisées par l'association Foyer Rural de Laprade">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
                


        <!-- Séparation de la page en deux -->
        <div id='page' class='bg-dark text-white'>            
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1><ins>Foyer Rural <?php if(!$lang) {echo "de";} else if ($lang == "eng") {echo "of";}?> Laparade</ins></h1>
                        <br>
                        <h4><?php if(!$lang) {echo "Qui sommes-nous ?";} else if ($lang == "eng") {echo "Who are we?";}?></h4>
                        <p><?php if(!$lang) {echo "Le Foyer Rural a été créer en 1972 pour réunir les Laparadais autour de manifestaions fédératrices.<br><br>‌Le café associatif Coups d'R Café, cet espace convivial permet la rencontre et l’échanges entre les habitants de Laparade et des communes voisines, avec les visiteurs occasionnels, vacanciers, touristes de passage dans un village où le tissu associatif est existant mais où les équipements communaux et le commerce de proximité ne peuvent répondre suffisamment aux besoins de la population en évolution dans son mode de vie. <br><br> Ce projet territorial a pour vocation de mettre en synergie des initiatives locales d’intérêt général, de favoriser des démarches citoyennes collectives, de créer le lien social et intergénérationnel autour de projets collaboratifs (sur le thème de l’éducation, l’environnement, la citoyenneté, la santé, la culture, l’alimentation…) au service de la population, mais aussi de participer au renouveau du dynamisme économique de la ville par la création d’un commerce de proximité.";} else if ($lang == "eng") {echo "The Rural Community was created in 1972 to gather all the inhabitants of Laparade around unifying events. Visit the community coffee “Coup d’R Café” is a place to meet and interact with other people from Laparade and from surrounding cities, occasional visitors, tourists and holiday-makers. The voluntary character is well present in this village, but unfortunately, the municipal equipments and the local shop may not respond enough to the needs of the population, which is in a constant evolution in its lifestyle. <br><br> This territorial project has as a mission to join in collaboration the local initiatives with a general interest, to create social and intergenerational links around collaborative projects (on the theme of education, environment, citizenship, health, culture, nutrition…) in population’s service but also, to participate to the economic dynamism of the city via the creation of a local shop.";}?></p>
                        <br>

                        <div id="tel">
                            <h4>Nos futurs évenements :</h4>
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
                                        
                                        include './config/config.php';  // Import des informations de connexion à la base de données.
                                        // Établissement de la connexion au serveur mysql. + Corecion de l'erreur d'encodage.
                                        $cnx = new PDO("mysql:host=$hotedeconnexion;dbname=$basededonnee", "$utilisateur", "$motdepasse", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                                        
                                        // Selon la langue, nous questionnerons pas la même table.
                                        if(!$lang) {
                                             $req = 'SELECT * FROM `actufr`;';
                                        } else if ($lang == "eng") {
                                             $req = 'SELECT * FROM `actueng`;';
                                        }
                                                                                

                                        
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


                        <?php
                        if(!$lang) {
                            include './includes/index-fr.html';
                        
                        } else if ($lang == "eng") {
                            include './includes/index-eng.html';
                        }
                        
                        ?>
                        

                        


                    </div>


                    <div class="col-6 col-md-4" id="autre">


                        <div class="card bg-dark facebook" style="width: 18rem;">
                            <a href="https://www.facebook.com/foyerrural.laparade">
                                <div class="card-body">
                                    <h5 class="card-title"><?php if(!$lang) {echo "Rejoins-nous sur Facebook";} else if ($lang == "eng") {echo "Join Us on Facebook";}?></h5>
                                    <img src='images/accueil/facebook-logo.png'>
                                </div>
                            </a>
                        </div>

                        <div class="card bg-dark actu" style="width: 18rem;">
                            <div class="card-body ">
                                <h5 class="card-title">Actualités :</h5>
                                
                                 <?php
                    
                                        include './config/config.php';  // Import des informations de connexion à la base de données.
                                        // Établissement de la connexion au serveur mysql. + Corecion de l'erreur d'encodage.
                                        $cnx = new PDO("mysql:host=$hotedeconnexion;dbname=$basededonnee", "$utilisateur", "$motdepasse", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                                        

                                        // Selon la langue, nous questionnerons pas la même table.
                                        if(!$lang) {
                                             $req = 'SELECT * FROM `actufr`;';
                                        } else if ($lang == "eng") {
                                             $req = 'SELECT * FROM `actueng`;';
                                        }
                                        
                                        
                                        // Envoie au serveur la commande via le biais des informations de connexion.
                                        $res = $cnx->query($req);

                                        // Boucle tant qu'il y a de lignes corespondantes à la requettes
                                        while ($ligne = $res->fetch(PDO::FETCH_OBJ)) {
                                            

                                        echo "<p><span class='font-weight-bold'>$ligne->date - $ligne->heure</span> : $ligne->evenement | Lieu : <u>$ligne->lieu</u></td>";   
                                        }
                                    ?>
                                
                            </div>
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
        <p>&copy;2020 Foyer Rural Laparade - contact@foyerrural-laparade.fr -  06 80 24 62 82 - 07 88 45 37 20 <p>
    </footer>
</html>
