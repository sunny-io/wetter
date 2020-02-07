<?php

$wetterdaten = file_get_contents("https://www.metaweather.com/api/location/638242/");
$wetterdaten = json_decode($wetterdaten, true);

?>




<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nicht so tolle Wetter App</title>

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="hero is-fullheight is-dark is-bold">
      <div class="container has-text-centered">
        <div class="content is-small">
          Hier der Ort und das Datum
        </div>

      <div class="rel state">
        <img src="img/<?php echo $wetterdaten["consolidated_weather"][0]["weather_state_abbr"]?>.svg" alt="Wetter Icon" width="200" height="200">
        <p>
          <span class="min-temp">
            <?php  echo round($wetterdaten["consolidated_weather"][0]["min_temp"]); ?>
          </span>

          <span class="max-temp">
          <?php  echo round($wetterdaten["consolidated_weather"][0]["max_temp"]); ?>
          </span>
        </p>
        </div>

        <div class="content is-large state">
          <p class="is-size-1 is-uppercase has-text-weight-bold">
            <?php
              if($wetterdaten["consolidated_weather"][0]["weather_state_abbr"] == "c"){
                echo "Happy Sunshine";
              }

              elseif($wetterdaten["consolidated_weather"][0]["weather_state_abbr"] == "lc"){
                echo "Ganz OK";
              }

              else {
                echo "Bleib im Bett";
              }

            ?>
          </p>
        </div>
      </div>
      </div>
    </div>
  </body>
</html>
