<?php
// 正規表現を使ってみよう！
// 正規表現とは文字列のパターンを表現するための方法
/**
 * よく使う表現
 * . 任意の一文字
 * * 0回以上の繰り返し
 * + 1回以上の繰り返し
 * {n} n回の繰り返し
 * [] 文字クラスの作成
 * [abc] aまたはbまたはc
 * [^abc] aまたはbまたはc以外
 * [0-9] 0~9まで
 * [a-z] a~zまで
 * $ 終端一致
 * ^ 先頭一致
 * \w 半角英数字とアンダースコア
 * \d 数値
 * \ エスケープ
 * () 文字列の抜き出し
 */

$char = '<h2>1ZAabd1_sscc</h2>';
if (preg_match("/<h2>(.{2,})<\/h2>/i", $char, $result)) {
  echo '検索成功';
  print_r($result);
} else {
  echo '失敗';
}
echo '<br>';
$char = '';
if (preg_match("/.{0,}/i", $char, $result)) {
  echo '検索成功';
  print_r($result);
} else {
  echo '失敗';
}
