<?php

namespace lib;
use const lib\sub\TAX_RATE;

function with_tax($base_price, $tax_rate = TAX_RATE)
{
  $sum_price = $base_price + ($base_price * $tax_rate);
  $sum_price = round($sum_price);
  return $sum_price;
}
// use GrobalCls;

// if(!defined('TAX_RATE')) {
//     define('TAX_RATE', 0.1); // 名前空間に格納されない
// }
namespace lib\sub;

const TAX_RATE = 0.1;


\my_echo('グローバル');
my_echo('バックスラッシュなし');
new \GrobalCls();