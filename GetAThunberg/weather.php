<?php require_once('php/template.php') ?> <!-- Delete hors-site -->

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Openweathermap API Calls</title>
        <meta name="Meteotm" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css-js/weather.css">
    </head>

    <body>

  <?php include 'client.php'; ?> <!-- inclusion client.php -->

<div class="head"> <h1>GetWeather.php</h1> </div> 

<div class="centremoissa">
<!-- Formulaire html basique -->
<form id="searchville" name="search-form" method="get"> <!-- Choisir la méthode POST ou GET // Peu important ici -->
  <div class="formdiv">
   <label for="ville">Entrer la ville</label>
   <input class="villename" id="villename" maxlength="32" name="villename" required="required" type="text" />
   <input class="confirm" type="submit" name="confirm" id="Chercher" style="display: block;"/>
  </div>
</form>

</div>

<br>

<div class="flexcontainer">
<div class="results">

  <span class="resultitre">Tableur1 = <b>DailyAPI</b></span>
  <span class="resultitre">Tableur2 = <b>Prévisonel</b></span><hr>

  <!-- On echo pour afficher la valeur villename qu'on récupère via la requête GET du formulaire -->
  <span>Ville : <?php echo $_GET["villename"] ?></span> 
  
  <table class="tablestats"> <!-- Tableur 1 -->
    <thead>
          <th> Climat |</th>
          <th class="blue"> Température°K |</th>
          <th class="yellow"> Température°C |</th>
          <th class="green"> Temp. min. |</th>
          <th class="purple"> Temp. max.</th>
    </thead>
      <th> <?php echo $gstate ?> </th>
      <th class="blue"> <?php echo $tempK ?> </th> <!-- °K -->
      <th class="yellow"> <?php echo $tempC ?> </th> <!-- °C -->
      <th class="green"> <?php echo $mintempK." - ".$mintempC ?> </th> <!-- min° -->
      <th class="purple"> <?php echo $maxtempK." - ".$maxtempC ?> </th> <!-- max° -->
  </table>

  <hr>
<!-- Modèle de tableau -->
  <span> Tablo :</span>
  <span> <?php echo $_GET["villename"]." - ".$pays ?> </span> <!-- On utilise les . aux éxtrémités d'une inclusion de données non $variables  -->
  
  <table class="tablestats">
  <thead>
          <th>Date</th>
          <th>Sky</th>
          <th>Température</th>
          <th>Temp. Min</th>
          <th>Temp. Max</th>
  </thead>
  
<!-- Boucle foreach pour les données prévisonnelles :
    foreach value in json->list créer une rangée de 4 cellules avec les valeurs:
    date - climat - température - tempmin - tempmax // déclarer valeurs dans client.php
    // utiliser la boucle dans weather.php je crois 
  
    // foreach $list as $row => $innerArray
         foreach $innerArray as $innerRow => value
          echo'<tr>
              <th> $dt_txt </th>
              <th> weather -> 0 -> $main </th>
              <th> main -> $temp </th>
              <th> main -> $temp_min </th>
              <th> main -> $temp_max </th>
              </tr>'
         /end foreach
      /end foreach  
  --> 

  </table>
<!-- Fin du modèle -->

</div>
</div>

</body>
</html>

<?php echo($footer) ?> <!-- Delete hors-site -->