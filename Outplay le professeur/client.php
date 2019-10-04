<?php 
function getWeather($url){  
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
if ($_GET['villename']) {
   $villedata = getWeather("http://api.openweathermap.org/data/2.5/forecast?q=".$_GET['villename']."&appid=4554ce03af80b8d83a8af16a6ccae8de");
   $args = json_decode($villedata, true);
   $ville = $villedata;   
   $pi = $krgs['sys']['country'];
}
?>