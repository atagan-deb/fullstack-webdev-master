<?php
$score = 60;
$absence = 2;
$result = '';
if ($score < 50 || $absence > 4) {
  $result = '不合格';
} else if ($score < 70) {
  $result = '合格';
} else {
  $result = '秀';
}

echo "結果：{$result}";
