<?php
$wetterdaten = file_get_contents('https://www.metaweather.com/api/location/638242/');



//convert to php-array

$wetterdaten = json_decode($wetterdaten, true);


//var_dump($wetterdaten);

//Separate actual weather information from other data

$wochenwetter = $wetterdaten['consolidated_weather'];

/*Compute if the weather is Ok for dancing outside*/


$wettertaglines0 = [
    "c" => "Tanzen auf dem Feld!",
    "lc" => "Tanzen auf dem Feld!",
    "hr" => "Heute geht nur drinnen tanzen",
    "lr" => "Nimm eine Jacke mit",
    "lc" => "Tanzen auf dem Feld",
    "hc" => "Tanzen auf dem Feld",
    "lc" => "Nimm eine Jacke mit",
    "sl" => "Jacke und Schirm dabei?",
    "sn" => "Nimm eine warme Jacke mit",
    "s" => "Tanzen auf dem Feld? Kurzfristig entscheiden",
    "t" => "Tanzen auf dem Feld? Kurzfristig entscheiden",
    "h" => "Jacke und Schirm dabei?"

];

$wettertaglines1 = [
    "c" => "Spazieren gehen",
    "lc" => "Spazieren gehen",
    "hr" => "Drinnen ist es so scön trocken",
    "lr" => "Nimm eine Jacke mit",
    "lc" => "Spazieren gehen",
    "hc" => "Spazieren gehen",
    "lc" => "Nimm eine Jacke mit",
    "sl" => "Jacke und Schirm dabei?",
    "sn" => "Nimm eine warme Jacke mit",
    "s" => "Herbswetter",
    "t" => "Magst Du Gewitter?",
    "h" => "Jacke und Schirm dabei?"

];

$tagline = "Heute ist Wetter"; /*fallback*/

/*use different array depending on temperature (not very precise, more complex eval later)*/

if  ($wochenwetter[0]['max_temp'] >= "15") {
    $tagline = $wettertaglines0[ $wochenwetter[0]['weather_state_abbr']];
}
else {
    $tagline = $wettertaglines1[ $wochenwetter[0]['weather_state_abbr']];
};





