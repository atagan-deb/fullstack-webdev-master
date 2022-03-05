<?php
$num = 0;
counter(3);
function counter($step = 1)
{
    global $num;
    $num += $step;
    echo $num;
    return $num;
}
counter(3);
