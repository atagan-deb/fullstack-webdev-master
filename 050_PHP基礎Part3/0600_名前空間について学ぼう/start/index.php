<?php

require_once 'lib.php';

// $price = \lib\with_tax(1000, 0.08);
// echo $price;

// echo \lib\TAX_RATE . '<br>';

use function lib\with_tax;
use const lib\sub\TAX_RATE;

$price = with_tax(1000, 0.08);
echo $price . '<br>';

echo TAX_RATE . '<br>';

function my_echo($text = '')
{
    echo $text . '<br>';
}
class GrobalCls
{
}
