<?php

/*
 * Find the city
 */

// If the user search a city
if (!empty($_GET['city'])) {
    $location = ('q='.$_GET['city']);
}
// If the user search nothing
else {
    // If the user have activate his localization
    if((!empty($lat)) and (!empty($lon))) {
        $location = 'lat='.$lat.'&lon='.$lon;
    }
    // Callback
    else {
        $location = ('q=Paris');
    }
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
 * Create parallax
 */

$parallax = strtolower($forecast->weather[0]->main);