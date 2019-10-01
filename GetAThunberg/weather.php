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

  <?php 
  include 'client.php';
  ?>


<div class="head"> <h1>GetWeather.php</h1> </div> 

<div class="centremoissa">

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

  <span class="resultitre">Résultats</span><hr>
  <span>Ville : <?php echo $_GET["villename"] ?></span> <!-- On echo pour afficher la valeur villename qu'on récupère via la requête POST du formulaire -->
  <span>Pays : <?php echo $pays ?></span>
  <span>Température : <?php echo $temp ?></span>

</div>
</div>

</body>
</html>

<?php echo($footer) ?> <!-- Delete hors-site -->