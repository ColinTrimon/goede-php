<?php
date_default_timezone_set("Europe/Amsterdam");
date_default_timezone_get();
$time = date_default_timezone_get;

echo "<p id='currently'>Currently it is:</p>". date("H:i:sa d-m-Y<br>");

$date = date("H");

if ($date < 6) {
  $tekst= "<p>Goodnight Sweetheart!</p>";
  $body= 'night.png';
  $animationimg=  "<image id='ufo' src='backgrounds/ufo.png' alt='ufo'>";
  
}
elseif($date < 12) {
  $tekst= "<p>Goodmorning Sweetheart!</p>";
  $body= 'morning.png';
}
elseif ($date < 18) {
  $tekst= "<p>Goodafternoon Sweetheart!</p>";
  $body= 'afternoon.png';
  $animationimg= "<image id='plane' src='backgrounds/plane.png' alt='plane'>";
}
else{
  $tekst= "<p>Goodevening Sweetheart!</p>";
  $body= 'evening.png';
}
?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Saira" rel="stylesheet">
    <title>Goede</title>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body background="backgrounds/<?php echo $body; ?>">
    <?php

    echo $tekst;
    echo $animationimg;
    ?>
  </body>
</html>
