<?php

$text = $_POST["inputText"];
$word = $_POST["inputWord"];

// qui sotto il puro codice php con stampa a schermo un po' bruttina ma perfetamente funzionante, 
// quindi messo in commento e ristampato graficamente più gradevole con html

// echo "Testo ricevuto: " . $text . "<br>";
// echo "Parola da censurare: " . $word . "<br>";
// echo "Testo censurato: "; echo str_replace($word, "xxx", $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="d-flex justify-content-center my-5">
        <h1 class="text-primary">PHP BADWORDS</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-8" >
            <h4 class="text-primary mt-5 justify-content-center">Testo ricevuto: <?php echo $text ?> </h4>
            <h4 class="text-danger my-5">Parola da censurare: <?php echo $word ?></h4>
            <h4 class="text-success my-5">Testo censurato: <?php echo str_replace($word, "xxx", $text)?></h4>

        </div>

    </div>        
</body>
</html>

