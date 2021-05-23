<?php

$wetterdaten = file_get_contents('https://www.metaweather.com/api/location/638242/');



//umwandeln in php-array (was war noch true? Associative?)

$wetterdaten = json_decode($wetterdaten, true);


//var_dump($wetterdaten);

//Weterdaten von anderen inhalten treffen

$wochenwetter = $wetterdaten['consolidated_weather'];

//var_dump($wochenwetter);




$wetter_heute = $wochenwetter[0];

//var_dump($wetter_heute);

$min_temp = round( $wetter_heute['min_temp']);
//echo $min_temp;
$max_temp = round( $wetter_heute['max_temp']);


?>

<?php
function keenSliderContent ($input=$wochenwetter){
    $i = 0;

    for ($i=1; $i < 6 ; $i++): ?>

        <div class="keen-slider__slide number-slide">
            <h2 class="title">
               <?php echo date('l',  strtotime ($wochenwetter[$i]['applicable_date']));?>
            </h2>
            <div class="tile-img">
                <img src="img/<?php echo $wochenwetter[$i]['weather_state_abbr']; ?>.svg" alt="echo $wochenwetter[$i]['weather_state_name']?>;">
            </div>

            <p>
                <span class="min-temp"> <?php echo round($wochenwetter[$i]['min_temp']); ?> C
                </span>
                <span class="max-temp"><?php echo round($wochenwetter[$i]['max_temp']); ?> C
                </span>
            </p>
        </div> 
       
    <?php endfor ?>

 /*dies ding funzt nicht*/   
function keenSliderContent ($input=$wochenwetter){
    $i = 0;

    for ($i=1; $i < 6 ; $i++): {

        <div class="keen-slider__slide number-slide">
            <h2 class="title">
               <?php echo date('l',  strtotime ($wochenwetter[$i]['applicable_date']));?>
            </h2>
            <div class="tile-img">
                <img src="img/<?php echo $wochenwetter[$i]['weather_state_abbr']; ?>.svg" 
                alt="<?php echo $wochenwetter[$i]['weather_state_name']; ?>" >
            </div>

            <p>
                <span class="min-temp"> <?php echo round($wochenwetter[$i]['min_temp']); ?> °C
                </span>
                <span class="max-temp"><?php echo round($wochenwetter[$i]['max_temp']); ?> °C
                </span>
            </p>
        </div> 
    };


    };
  
      