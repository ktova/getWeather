# getWeather
PHP gWeather
Source : https://richie.u-strasbg.fr/~virgile/sf4/public/index.php/cours/php/exercice
----------------------------------------------------------------------------------------
1 - Créer weather.php
  - Ajouter un header + body html + shrek en footer
2 - <form> methode POST
3 - Bouton type 'submit' 
  - $ville = sanitize_text_field($_POST["ville"])
  - echo $ville
4 - Créer client.php
  - utiliser l'API openweather jsp quoi avec requete cURL (proxy local ?)
  - $args = array( "valeur1" => $val1, "valeur2" => $val2, etc... )
5 - json_decode($args,true)
6 - Dans weather.php : <?php include 'client.php';?>
7 - Récuperer (GET ou POST???) le JSON de $ville
8 - echo $ville  du json
9 - echo $country du json
10 - Créer un tableau html - En-tête HTML
   - Body de tableau :
  
  Boucle for h <= 24
<?php
$json = '{"ville":$ville,"country":$country, "créneau":$creneau, "prévision":$prevision, "temp.maxC":$tempmaxC, "temp.minC":$tempminC, "temp.maxF":$tempmaxF, "temp.minF":$tempminF}'; // Calcul maths pour C° en F°

var_dump(json_decode($json));
var_dump(json_decode($json, true));

?>
