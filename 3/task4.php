<?php

$text=file_get_contents ('text.txt');
var_dump($text);

//преобразование текста
$parts = explode("\n\n", $text);
var_dump($parts);

file_put_contents('result.txt' , $text);