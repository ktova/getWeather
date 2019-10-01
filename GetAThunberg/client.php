
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
   // Utilisation de la fonction getWeather pour retrieve le json
   $villedata = getWeather("http://api.openweathermap.org/data/2.5/forecast?q=".$_GET['villename']."&appid=4554ce03af80b8d83a8af16a6ccae8de"); // Forecast = previsionel
   $villedatasimple = getWeather("http://api.openweathermap.org/data/2.5/weather?q=".$_GET['villename']."&appid=4554ce03af80b8d83a8af16a6ccae8de"); // weather = actuel

   //json decode pour les 2 calls API
   $args = json_decode($villedata, true);
   $krgs = json_decode($villedatasimple, true);

   // On déclare les valeurs dont on a besoin
   $ville = $villedata;

   
   //Valeurs de l'API prévisonelle
   /* Structure du json de l'API Previsionnelle et ses valeurs utiles pour le projet :
   - main 
   - list
    - item 1 (0)
      - main
        - temp (température en K)
        - temp_min (temperature mini)
        - temp_max (temperature max)
      - weather
        - 0
          - main (état du ciel)
          - description (description de l'état)
      - dt_txt (date de la prévision)
    - item 2 (1)
    - item n (n-1)    
   */
   $pays = $args['city']['country'];
   

   // Valeurs de l'API journalière
   $pi = $krgs['sys']['country'];
   $gstate = $krgs['weather'][0]['main'];
   $tempK = $krgs['main']['temp']."&deg;K.";
   $tempC = $tempK - 273.15."&deg;C.";
   $mintempK = $krgs['main']['temp_min']."&deg;K.";
   $maxtempK = $krgs['main']['temp_max']."&deg;K.";
   $mintempC = $mintempK - 273.15."&deg;C.";
   $maxtempC = $maxtempK - 273.15."&deg;C.";

   // On crée la chaine d'arguments 'meteoData'
   /* $meteodata = array(
       "ville" => $ville ,
       "pays" => $pays ,
       "etat" => $gstate ,
       "temperature" => $temp ,
       "tempmin" => $mintemp ,
       "tempmax" => $maxtemp ,
   );*/
}
?>
