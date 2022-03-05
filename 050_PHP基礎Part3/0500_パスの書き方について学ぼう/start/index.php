<?php

/**
 * パスの書き方について学ぼう
 *
 * - マジック定数 __DIR__, __FILE__を使ってみよう
 * - dirnameの使い方を学ぼう
 * - 相対パスと絶対パス
 * - \と/は使い分けよう
 * - "と'は使い分けよう
 */

require './file1.php';
require '../end/file1.php';
require './sub/file2.php';

echo __DIR__ . '<br>';
echo __FILE__ . '<br>';

require __DIR__ . '/sub/file2.php';

echo dirname(__FILE__, 2) . '<br>';
// ただの文字列は''を使用する
// パスには/を使用する