<?php

$products = [
 [
  'title' => 'Плюшевый динозавр',
  'category' => '18+',
  'description' =>'Экологически чистый динозавр',
  'price' => '100$',
  'country' => 'China',
  ],
  [
   'title' => 'Корова',
   'category' => '18+',
   'description' =>'Бодрая корова',
   'price' => '70$',
   'country' => 'Russia',
  ],
  [
   'title' => 'Петух',
   'category' => '2+',
   'description' =>'Живописный петух',
   'price' => '70$',
   'country' => 'Syberia',
  ],
  [
   'title' => 'Конь',
   'category' => '10+',
   'description' =>'Быстрый конь',
   'price' => '1700$',
   'country' => 'USA',
  ],
// var_dump($products);

foreach ($products as $key => $product) {
echo $product['title'];
echo $product['price'];
var_dump($product);