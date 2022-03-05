<?php
$arry = ['taro', 'hanako', 'jiro'];
print_r($arry);
var_dump($arry);
echo $arry[1];

$arry[1] = 'sachiko';
$arry[] = 'saburo';

var_dump($arry);

for($i = 0; $i < count($arry); $i++) {
  echo '<div>', $arry[$i], '</div>';
}

foreach($arry as $v) {
  echo '<div>', $v, '</div>';
}

foreach($arry as $i => $v) {
  echo '<div>', $i, $v, '</div>';
}
