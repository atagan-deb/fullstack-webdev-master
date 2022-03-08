<?php

/**
 * SessionとCookieの理解度チェック
 *
 * index.phpに訪問するたびに訪問回数が
 * １ずつ増える処理を実装してみてください。
 * Session、Cookieの二つのパターンで実装してみましょう。
 *
 * １回目
 * 訪問回数は 1 回目です。
 *
 * ２回目
 * 訪問回数は 2 回目です。
 *
 */


// Sessionを使った場合
session_start();
if (empty($_SESSION['VISIT_COUNT'])) {
  $visit_count = 0;
} else {
  $visit_count = $_SESSION['VISIT_COUNT'];
}
$_SESSION['VISIT_COUNT'] = $visit_count + 1;
echo $_SESSION['VISIT_COUNT'];

// Cookieを使った場合
if (empty($_COOKIE['VISIT_COUNT'])) {
  $visit_count = 0;
} else {
  $visit_count = $_COOKIE['VISIT_COUNT'];
}
setcookie('VISIT_COUNT', $visit_count + 1);
echo $_COOKIE['VISIT_COUNT'] . '<br>';
