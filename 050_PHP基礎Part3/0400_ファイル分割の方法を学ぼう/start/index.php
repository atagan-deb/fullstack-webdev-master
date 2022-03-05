<?php

/**
 * ファイル分割の方法を学ぼう
 *
 * - require、includeの違い
 * - require、require_onceの使い方
 */
$arry = [
    'num' => 0
];

require('file1.php');
require('file1.php');
require_once('file1.php');
require_once('file2.php');
require_once('file2.php');
require_once('file2.php');
fn1();
include('file.php');
echo $arry['num'] . "<br>";
require('file.php');
