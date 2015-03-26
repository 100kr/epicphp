<?php


$text = " lJl asdf alsdjkqkj2198 j \n фыдвалофывайцук <strong> фывафыв</strong> asdf";

$englishText = " Hello! ";
$russianText = "Привет";

$length = strlen($englishText);
$length2 = strlen($russianText);
var_dump($length, $length2);

var_dump($text, htmlspecialchars(ucfirst(nl2br(trim($text)))));

// echo $text;

$text = "asdf alsdjkqkj2198 j фыдвалофывайцук фывафыв asdf";

$parts = explode(" ", $text);

var_dump($parts);

$values =["rollover", "snake", "pullshot", "pushshot", "pullkick", "pinshot"];

echo implode(', ', $values);
