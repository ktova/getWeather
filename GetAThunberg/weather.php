<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Openweathermap API Calls</title>
        <meta name="Meteotm" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>

    <body>

  <?php
  include 'client.php';
  $city = sanitize_text_field($_POST["ville"]);
  ?>

    <form>
    Methode : POST / 1param : ville
    </form>

  <?php echo '$city' ?>

    </body>
</html>