
<?php 

function getWeather($url){  //La fonction est utilisé pour récupérer le .json de l'API avant de le travailler
  
        // Initialisation de requête
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        /*// Ajout de la clé d'API dans l'entête
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['apikey: 4554ce03af80b8d83a8af16a6ccae8de' . $apikey]);*/

        // On récupèrera la réponse
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        // Exécution de la requête
        $response = curl_exec($ch);

        // Fermeture
        curl_close($ch);

        // Récuperer les datas
        return $response;
    }

if ($_GET['villename']) {
   $villedata = getWeather("http://api.openweathermap.org/data/2.5/weather?q=".$_GET['villename']."&appid=4554ce03af80b8d83a8af16a6ccae8de");
   
   $args = json_decode($villedata, true);

   $pays = $args['sys']['country'];
   $temp = $args['main']['temp']."&deg;C.";
}







/*
        $dataArgs = array(
            "name" => $nom,
            "country" => $pays,
            "main" => $prevision,
            "temp" => $temp,
            "temp_min" => $mintemp,
            "temp_max" => $maxtemp,
            "value5" => $val5,
        )
        */
?>
