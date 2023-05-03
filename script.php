<?php


/* $content = $_GET['textContent']; //vado a recuperare il paragrafo

$censored = $_GET['censoredWord']; //vado a recuperare la parola da censurare
var_dump($content); */

//var_dump($_GET);

$content = $_GET['textContent']; //vado a recuperare il paragrafo

$censored = $_GET['censoredWord'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>paragraph: <?php echo $content ?> </h2>

    <h1>censored: <?php echo $censored ?> </h1>
    
</body>
</html>