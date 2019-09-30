# getWeather
PHP gWeather
Source : https://richie.u-strasbg.fr/~virgile/sf4/public/index.php/cours/php/exercice
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
