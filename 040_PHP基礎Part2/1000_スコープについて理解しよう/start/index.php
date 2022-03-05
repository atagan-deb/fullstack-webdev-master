<?php

/**
 * スコープ
 * 変数が参照可能な範囲
 *
 * グローバルスコープ
 * ローカルスコープ
 * スーパーグローバル
 */

$a = 1; // グローバル
echo $a;

function fn1()
{
  global $a;
  $b = 1; // ローカル
  echo $a;
  var_dump($_SERVER); // スーパーグローバル
  if (true) {
    $c = 1; // ブロックスコープは作成されない
  }
  echo $c;
}
fn1();
