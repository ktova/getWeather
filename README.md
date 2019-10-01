# getWeather
PHP gWeather
Source : https://richie.u-strasbg.fr/~virgile/sf4/public/index.php/cours/php/exercice
----------------------------------------------------------------------------------------
Version Test : https://teva.re/ale6
----------------------------------------------------------------------------------------
API key:
- Your API key is 4554ce03af80b8d83a8af16a6ccae8de
- Within the next couple of hours, it will be activated and ready to use
- You can later create more API keys on your account page
- Please, always use your API key in each API call

Endpoint:
- Please, use the endpoint api.openweathermap.org for your API calls
- Example of API call:
api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=4554ce03af80b8d83a8af16a6ccae8de

Useful links:
- API documentation https://openweathermap.org/api
- Details of your plan https://openweathermap.org/price
- Please, note that 16-days daily forecast and History API are not available for Free subscribers
----------------------------------------------------------------------------------------
cURL test avec ma key:
~ curl "https://api.openweathermap.org/data/2.5/weather?q=Paris&appid=4554ce03af80b8d83a8af16a6ccae8de"
----------------------------------------------------------------------------------------

 - Créer weather.php
 - Ajouter un header + body html + shrek en footer
 - balise form methode POST
 - Bouton type 'submit' 
 - $ville = sanitize_text_field($_POST["ville"])
 - echo $ville
- Créer client.php
- utiliser l'API openweather jsp quoi avec requete cURL (proxy local ?)
- $args = array( "valeur1" => $val1, "valeur2" => $val2, etc... )
- json_decode($args,true)
- Dans weather.php : <?php include 'client.php';?>
- Récuperer (GET ou POST???) le JSON de $ville
- echo $ville  du json
- echo $country du json
- Créer un tableau html - En-tête HTML
- Body de tableau :
  
  Boucle for h <= 24
/*<?php
$json = '{"ville":$ville,"country":$country, "créneau":$creneau, "prévision":$prevision, "temp.maxC":$tempmaxC, "temp.minC":$tempminC, "temp.maxF":$tempmaxF, "temp.minF":$tempminF}'; // Calcul maths pour C° en F°

var_dump(json_decode($json));
var_dump(json_decode($json, true));

?>*/
