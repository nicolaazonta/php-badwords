<?php


/* $content = $_GET['textContent']; //vado a recuperare il paragrafo

$censored = $_GET['censoredWord']; //vado a recuperare la parola da censurare
var_dump($content); */

//var_dump($_GET['textContent']);

$content = $_GET['textContent']; //recupero il paragrafo

$NotYetCensored = $_GET['censoredWord']; //recupero la parola da censurare

$censored = str_replace("$NotYetCensored","***","$content");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center p-5">
        <div class="col-5">
            <div class="card p-3 bg-dark">


                <div class="mb-3">
                    <h2 class="text-light">paragraph: <?php echo $content ?> </h2>
                    <p class="text-light">paragraph length: <?php echo strlen($content) ?></p>

                </div>

                <div class="mb-3">
                    <h2 class="text-light">censored: <?php echo $censored ?> </h2>
                    <p class="text-light">paragraph length: <?php echo strlen($censored) ?></p>

                </div>



            </div>
        </div>
    </div>



</body>

</html>