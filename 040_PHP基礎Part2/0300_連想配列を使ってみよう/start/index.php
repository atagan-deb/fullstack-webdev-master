<?php
$arry = [
  'name' => 'Bob',
  'age' => 12,
  'sports' => ['baseball', 'swimming']
];

echo $arry['name'];
$arry['age'] += 24;
echo $arry['age'];
echo $arry['sports'][1];
unset($arry['name']);
var_dump($arry);
unset($arry);
var_dump($arry);