<?php

$people = [
 [
  'name' => 'Алена',
  'surname' => 'Водонаева',
  'gorod' =>'Санкт-Петербург',
  'e-mail' => 'alena@yandex.ru',
  'id v vk' => 'id123',
  'interreses' => 'Водка, пиво, дискотеки', 
  ],
  [
  'name' => 'Ирина',
  'surname' => 'Васильева',
  'gorod' =>'Москва',
  'e-mail' => 'mos@yandex.ru',
  'id v vk' => 'id100',
  'interreses' => 'Музеи, театры, концерты', 
  ],
  [
  'name' => 'Петр',
  'surname' => 'Петров',
  'gorod' =>'Пермь',
  'e-mail' => 'perm@yandex.ru',
  'id v vk' => 'id1001',
  'interreses' => 'Тоска по Питеру', 
  ],
  [
  'name' => 'Николай',
  'surname' => 'Васильев',
  'gorod' =>'Псков',
  'e-mail' => 'nik-vas@pskov.ru',
  'id v vk' => 'id1',
  'interreses' => 'Водка, пиво, дискотеки', 
  ],
];
foreach ( $people as $key => &$odnogrupnik ) {
   $people[$key]['name'] = $odnogrupnik['surname'];
   $people[$key]['surname'] = $odnogrupnik['gorod'];
   $people[$key]['gorod'] = $odnogrupnik['name'];
}

 var_dump($people);