<?php

/*
 * Find the city
 */

// Get ip (need it in local)
$ip = file_get_contents('https://api.ipify.org');

// Localisation of the ip
$json  = file_get_contents("https://freegeoip.net/json/$ip");
$json  =  json_decode($json ,true);
$country =  $json['country_name'];
$region= $json['region_name'];
$city = $json['city'];

// If the user search a city
if (!empty($_GET['city'])) {
    $location = ('q='.$_GET['city']);
}
// Use city
else if(!empty($city)){
    $location = 'q='.$city;
}
// Else use region
else if(!empty($region)){
    $location = 'q='.$region;
}
// Else use country
else if(!empty($country)){
    $location = 'q='.$country;
}
// Callback
else {
    $location = ('q=Paris');
}


/*
 * Make the request
 */

$url = 'http://api.openweathermap.org/data/2.5/weather?'.$location.'&units=metric&lang=fr&type=like&APPID=468893012d4588edfecec01bea3608fc';
$path = 'cache/'.sha1($location.date('Y-d-H')); // File name = hash location+hour


// From the cache
if(file_exists($path)) {
    $forecast = file_get_contents($path);
}

// From API
else {
    $forecast = file_get_contents($url);
    file_put_contents($path, $forecast); // Create file in cache
}

// Convert in object
$forecast = json_decode($forecast);



/*
 * Use weather condition in code
 */

$weather_id = $forecast->weather[0]->id;

if ($weather_id == 800) {
    $current_weather = 'sun';
}
else if ((substr($weather_id, 0, 1) == 7) || (substr($weather_id, 0, 2) == 80)) {
    $current_weather = 'cloud';
}
else {
    $current_weather = 'rain';
}