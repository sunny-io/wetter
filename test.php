<?php

$wetterdaten = file_get_contents("https://www.metaweather.com/api/location/638242/");
$wetterdaten = json_decode($wetterdaten, true);

?>
<pre>
<?php 
   var_dump($wetterdaten["consolidated_weather"][0]["min_temp"]);
//var_dump($wetterdaten); 

?>
</pre>