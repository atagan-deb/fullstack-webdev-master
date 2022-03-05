<?php
$numbers = [1, 2, 3, 4];

$sum = 0;

foreach ($numbers as $num) {
  $sum += $num;
}
echo "合計：{$sum}<br>";

$numbers2 = [1, 7, 39];

$sum2 = 0;

foreach ($numbers2 as $num2) {
  $sum2 += $num2;
}
echo "合計：{$sum2}<br>";

function sum($nums)
{
  $sum = 0;
  foreach ($nums as $num) {
    $sum += $num;
  }
  return $sum;
}

$ret = sum($numbers);
echo "合計：{$ret}<br>";
sum($numbers2);
