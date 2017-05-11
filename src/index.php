<?php

// Go home if they are no request
$q = isset($_GET['q']) ? $_GET['q'] : 'home';


// Include the asked page
if (file_exists('views/'.$q.'.php')){
    $include = 'views/'.$q.'.php';
}

// If they are no files => 404
else {
    $include = 'views/404.php';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Clean weather</title>
    <meta name="description" content="Clean weather." />
    <link rel="icon" type="image/png" href="img/logo.png" sizes="64x64">
    
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Clean weather">
    <meta name="twitter:description" content="Clean weather.">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="">
    
    <!-- Open Graph data -->
    <meta property="og:title" content="Clean weather" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Clean weather." />
    <meta property="og:site_name" content="Clean weather" />
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500, 600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/app.min.css" rel="stylesheet" type="text/css" />
</head>
    
<?php
    include $include;
?>
    
</html>