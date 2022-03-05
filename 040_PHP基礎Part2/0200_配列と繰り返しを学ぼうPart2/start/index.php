<?php
$arry = [
  ['table', 1000],
  ['chair', 399],
  ['bed', 14550],
  ['table', 1000],
  ['chair', 399],
  ['bed', 14550]
];

// $arry[1] = ['chair', 500];
$arry[1][1] = 500;
foreach ($arry as $val) {
  echo "{$val[0]}は{$val[1]}円です。";
}

echo "<br>";
array_shift($arry);
var_dump($arry);
echo "<br>";
array_pop($arry);
var_dump($arry);
echo "<br>";
array_splice($arry, 1, 1);
var_dump($arry);
echo "<br>";
array_splice($arry, 1, 1, ['replace']);
var_dump($arry);
echo "<br>";
