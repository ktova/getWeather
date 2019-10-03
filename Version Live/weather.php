<?php require_once('php/template.php') ?> <!-- Delete hors-site -->

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Openweathermap API Calls</title>
        <meta name="Meteotm" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css-js/weather.css">
        <script src="https://kit.fontawesome.com/0d2059c859.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>

    <body>

  <?php include 'client.php'; ?> <!-- inclusion client.php -->

<div class="head"> <h1>GetWeather.php</h1> </div> 

<div class="flexcontainer">
<div class="results">

<div class="centremoissa">

<!-- Formulaire html basique -->
<form id="searchville" name="search-form" method="get"> <!-- Choisir la méthode POST ou GET // Peu important ici -->
  <div class="formdiv">
   <label for="ville">Entrer la ville</label>
   <input class="villename" id="villename" maxlength="32" name="villename" required="required" type="text" placeholder="Entrez une ville" />
   <input class="confirm" type="submit" name="confirm" id="Chercher" style="display: block;"/>
  </div>
</form>

</div>

  <div class="centremoissa">
  <div class="styleweather">
  <span class="citytitle"> <?php echo $_GET["villename"]."&nbsp;".$pays." - " ?>Current Weather Status </span>
  <span> <?php echo date('l h:i A') ?> </span>
  <span> <?php echo date('j F, Y') ?> </span>
  <span> <?php echo $dstate ?> </span> 
  <div class="tempstyle">
  <i class="fasss fas fa-cloud-sun fa-2x"></i>
  <span class="temp"> <?php echo $tempC ?> </span>
  <span> <i class="fas fa-arrow-alt-circle-down fa-0.5x"></i><?php echo $mintempC ?> </span>
  <span> <i class="fas fa-arrow-alt-circle-up fa-0.5x"></i><?php echo $maxtempC ?> </span>
  </div>
  <span>Humidity: <?php echo $humidity ?>%</span>
  <span>Wind: <?php echo $wind ?>km/h</span>
  </div>
  </div>

<div id="main" class="centremoissa">
<div class="tableauprevi">

  <!-- On echo pour afficher la valeur villename qu'on récupère via la requête GET du formulaire -->
  <span class="ctname"> Prévisions </span>

<!-- Modèle de tableau -->
  <table class="tablestats">
  <thead>
          <th>Date</th>
          <th>Sky</th>
          <th>Température</th>
          <th>Temp. Min</th>
          <th>Temp. Max</th>
  </thead>
  <tbody>
  <?php 
  if (is_array($args)) {                              // Si le call des datas prévisionnels a lieu ->
    foreach ($args as $list) {                        // Pour chaque liste dans le retour JSON ->
      if (is_array($list)){                           // si la fonction is_array() sur les liste retourne true = prevent type Illegal string offset
      foreach($list as $key => $value) {              // On déclare les chaines de la liste en $clé => $valeur :
        // DEBUG  echo $key." - ".$value."<br>"; 
        if (is_array($value)){                        // pareil que pour les listes on prevent les erreurs chiantes
        // On déclare les valeurs ainsi que les calculs °K-273.15 = °C
        $cDate = $value['dt_txt'];
        $cWeather = $value['weather']['0']['main'];
        // Température en Kelvin
        $cTempK = $value['main']['temp'];
        $cMintempK = $value['main']['temp_min'];
        $cMaxtempK = $value['main']['temp_max'];
        // Conversion Celsius
        $difference = 273.15;
        $cTempC = $cTempK - $difference;
        $cMintempC = $cMintempK - $difference;
        $cMaxtempC = $cMaxtempK - $difference;

        // On affiche les valeurs avec le style html
        // On utilise les . aux éxtrémités d'une inclusion de données non $variables 
        echo 
        "<tr>".
        "<td>".$cDate."</td>".
        "<td>".$cWeather."</td>".
        "<td>".$cTempC."°C</td>".
        "<td>".$cMintempC."°C</td>".
        "<td>".$cMaxtempC."°C</td>".
        "</tr>"
        ;
        }  
        else {
          break; // on utilise else break pour limiter le retour aux valeurs météorologiques
        } 
       }
      }
     } 
    }
  ?>
  </tbody>
  </table>
</div>
</div>
<!-- Fin du modèle -->
</div>
</div>

</body>
</html>

<?php echo($footer) ?> <!-- Delete hors-site -->