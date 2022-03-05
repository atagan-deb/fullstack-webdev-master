<?php

$arry = [
  // 'key' => 10,
];

if (isset($arry['key'])) {
  $arry['key'] *= 10;
} else {
  $arry['key'] = 1;
}
echo $arry['key'] . '<br>';
$arry['key'] = isset($arry['key']) ? $arry['key'] * 5 : 1;
echo $arry['key'] . '<br>';

$arry['key'] = $arry['key'] ?? 1;
echo $arry['key'] . '<br>';
