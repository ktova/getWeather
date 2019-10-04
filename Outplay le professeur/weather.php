<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Openweathermap API Calls</title>
        <meta name="Meteotm" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="weather.css">
    </head>

    <body>

  <?php include 'client.php'; ?>

<div class="head"> <h1>GetWeather.php</h1> </div> 

<div class="flexcontainer">
<div class="results">

<div class="centremoissa">

<form id="searchville" name="search-form" method="get"> 
  <div class="formdiv">
   <label for="ville">Entrer la ville</label>
   <input class="villename" id="villename" maxlength="32" name="villename" required="required" type="text" />
   <input class="confirm" type="submit" name="confirm" id="Chercher" style="display: block;"/>
  </div>
</form>

</div>



<div id="main" class="centremoissa">
<div class="tableauprevi">

  <span class="ctname"> <?php echo $_GET["villename"]." - ".$pays ?> </span> 

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
  if (is_array($args)) {                              
    foreach ($args as $list) {                       
      if (is_array($list)){                           
      foreach($list as $key => $value) {              
        if (is_array($value)){                       
        $cDate = $value['dt_txt'];
        $cWeather = $value['weather']['0']['main'];
        $cTempK = $value['main']['temp'];
        $cMintempK = $value['main']['temp_min'];
        $cMaxtempK = $value['main']['temp_max'];
        $difference = 273.15;
        $cTempC = $cTempK - $difference;
        $cMintempC = $cMintempK - $difference;
        $cMaxtempC = $cMaxtempK - $difference;
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
          break; 
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
</div>
</div>

</body>
</html>