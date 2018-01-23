<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Saira" rel="stylesheet">
    <title>Goede</title>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <?php
    date_default_timezone_set("Europe/Amsterdam");
    date_default_timezone_get();
    $time = date_default_timezone_get;
    $page = $_SERVER['PHP_SELF'];
      $sec = "1";
      header("Refresh: $sec; url=$page");

    echo "Currently it is:<br>". date("H:i:sa <br>");

    $date = date("H");

    if ($date < 05) {
      echo "<p>goodnightSweetheart!</p>";
      echo '<body background="backgrounds/night.png">';
    }
    elseif($date < 12) {
      echo "<p>goodmorning Sweetheart!</p>";
      echo '<body background="backgrounds/morning.png">';
    }
    elseif ($date < 18) {
      echo "<p>goodafternoon Sweetheart!</p>";
      echo '<body background="backgrounds/afternoon.png">';
    }
    elseif($date < 23) {
      echo "<p>goodevening Sweetheart!</p>";
      echo '<body background="backgrounds/evening.png">';
    }
    ?>
  </body>
</html>
