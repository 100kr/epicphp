<?php

if (isset($_GET['title'])) {
 $input = $_GET['title'];
echo htmlspecialchars($input);
}
if (isset($_GET['description'])) {
 $input2 = $_GET['description'];
echo htmlspecialchars($input2);
}
if (isset($_GET['category'])) {
 $input3 = $_GET['category'];
echo htmlspecialchars($input3);
}
if (isset($_GET['price'])) {
 $input4 = $_GET['price'];
echo htmlspecialchars($input3);
}