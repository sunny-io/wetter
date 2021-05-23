<?php
$wetterdaten = file_get_contents('https://www.metaweather.com/api/location/638242/');



//umwandeln in php-array (was war noch true? Associative?)

$wetterdaten = json_decode($wetterdaten, true);


//var_dump($wetterdaten);

//Weterdaten von anderen inhalten treffen

$wochenwetter = $wetterdaten['consolidated_weather'];

/*Dumme Sprüche pro Wetter*/


function tagline($wetterzustand)
{
    if ($wetterzustand == 'c') {
        return "Raus mit Dir Du Couchpotato!";
    }
    elseif ($wetterzustand == 'lc' OR $wetterzustand == 's' ) {
        return "Nimm eine Jacke mit";
    }
    else {
        return "Bleib besser im Bett.";
    };
};


