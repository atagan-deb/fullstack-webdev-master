<?php
$name = 'Bob';
echo 'hello' . ', ' . $name . "\n\n\n";
echo 'hello' . ', $name' . "\n\n\n"; // NG
echo "hello, $name\n\n\n"; // OK
echo "he{$name}llo, $name \n\n\n"; // OK