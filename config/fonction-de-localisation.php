<?php 

    //Récupérer l'IP du visiteur transmit à partir d'ajax du fichier localisation.js
    $ipAdresse = $_GET['IP'];
    
    // Appel à l'API de récuperation des informations selon l'ip
    $ipdat = @json_decode(file_get_contents( 
        "http://www.geoplugin.net/json.gp?ip=" . $ipAdresse));
 
    
    //Retour selon la ville fournit par l'
    if ($ipdat->geoplugin_city=="Casablanca") {

        echo 1;
    }elseif ($ipdat->geoplugin_city=="Fès") {
        echo 2;
    }elseif ($ipdat->geoplugin_city=="Rabat") {
        echo 3;
    }else{
        echo 0;
    }
?> 