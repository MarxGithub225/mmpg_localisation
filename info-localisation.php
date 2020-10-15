<?php
//Titre de la page
$page ="cityInformationPage";

//Inclure le header
require'include/header.php';
?>

<!--Debut du coprs de la page-->

<section id="hero">

    <div class="hero container">
        <div>

            <?php
                if(isset($_GET["localisation"])){
                    if ($_GET["localisation"]=='casablanca') {
                        ?>
                                <h1>Casablanca</h1>
                                <p>
                                    Casablanca est une ville située au nord-ouest du Maroc. Capitale économique du pays et plus grande ville du Maghreb par la population, elle est située sur la côte atlantique, à environ 80 km au sud de Rabat, la capitale administrative.
                                </p> 

                        <?php
                    }elseif($_GET["localisation"]=='fes'){

                            ?>
                                <h1>Fès</h1>
                                <p>
                                    Fès ou Fez (en berbère : Fas, ⴼⴰⵙ, en arabe : فاس) est une ville du Maroc septentrional, située à 180 km à l'est de Rabat, entre le massif du Rif et le Moyen Atlas
                                </p> 

                        <?php
                    }elseif($_GET["localisation"]=='rabat'){
                            ?>
                                <h1>Rabat</h1>
                                <p>
                                    Rabat (en arabe : الرباط, ar-Ribāṭ ; en berbère : ⵔⵔⴱⴰⵟ, R-rbaṭ ; en darija : الرّباط, er-Rbaṭ) est la capitale du Maroc.

                                    La ville est située au bord de l'Atlantique au nord-ouest du Maroc, à 40 km au sud de Kénitra et 240 km au sud-ouest de Tanger et du détroit de Gibraltar, et à 87 km au nord-est de Casablanca. Elle est séparée de la ville de Salé au niveau de l'embouchure du Bouregreg, d'où leur surnom de « villes jumelles »
                                </p> 

                            <?php
                    }else{

                            
                            ?>

                                <p>
                                    Désolé, nousn'avons aucune informations sur votre localisation.
                                </p> 

                        <?php
                    }
                }
            ?>
        </div>
    </div>
</section>

<!-- Fin du corps de la page -->

<?php
//Inclure le footer
require'include/footer.php';