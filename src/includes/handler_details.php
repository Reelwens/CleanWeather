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
// If they are a location cookie
else if(!empty($_COOKIE['location'])) {
    $location = $_COOKIE['location'];
}
// Use city
else if(!empty($city)){
    $location = 'q='.$city;
    setcookie('location', $location, time() + 60 * 60 * 24, '/');
}
// Else use region
else if(!empty($region)){
    $location = 'q='.$region;
    setcookie('location', $location, time() + 60 * 60 * 24, '/');
}
// Else use country
else if(!empty($country)){
    $location = 'q='.$country;
    setcookie('location', $location, time() + 60 * 60 * 24, '/');
}
// Callback
else {
    $location = ('q=Paris');
}


/*
 * Make the request
 */

$url = 'http://api.openweathermap.org/data/2.5/forecast?'.$location.'&units=metric&lang=fr&type=like&APPID=468893012d4588edfecec01bea3608fc';
$path = 'cache/'.sha1($location.date('Y-d-H').'4D'); // File name = hash location+hour+4D


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