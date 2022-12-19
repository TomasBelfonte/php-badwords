<?php

$text = $_POST["inputText"];
$word = $_POST["inputWord"];

echo "Testo ricevuto: " . $text . "<br>";
echo "Parola da censurare: " . $word . "<br>";
echo "Testo censurato: "; echo str_replace($word, "xxx", $text);