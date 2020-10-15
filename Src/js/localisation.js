if('geolocation' in navigator){
    console.log('La localisation est disponible');
    
    //Fontion de géolocalisation
    navigator.geolocation.getCurrentPosition(position=>{

        //API de recuperation de l'adresse IP
        $.getJSON("https://api.ipify.org?format=json", function(data) { 

            //Envoie de l'IP à la fonction contenant l'API pour extraitre toutes les informations possible à partir d'une adresse IP
            $.get("../../config/fonction-de-localisation.php?IP="+data.ip,function(Resultat) {
                console.log(Resultat);

                //Rediriger selon la valeur du retour
                if(Resultat==1){
                    window.location = "../info-localisation.php?localisation=casablanca"
                }else if(Resultat==2){
                    window.location = "../info-localisation.php?localisation=fes"
                }else if(Resultat==3){
                    window.location = "../info-localisation.php?localisation=rabat"
                }else{
                    console.log('La localisation n\'est pas disponible')
                }
            });
        }) 
    });

}else{
    console.log('La localisation n\'est pas disponible')
}