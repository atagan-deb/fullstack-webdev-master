<?php

/**
 * 理解度チェック（クラス）
 *
 * ファイル書き込みを行うためのクラスを定義してみましょう。
 *
 * ヒント）PHP_EOL: 改行するための特殊な定数です。
 */
// $content = 'Hello, Bob.'; // append
// $content .= PHP_EOL; // newline
// $content .= 'Bye, '; // append
// $content .= 'Bob.'; // append
// $content .= PHP_EOL; // newline

// // commit
// file_put_contents('sample.txt', $content);
// $content = '';

// $content = 'Good night, Bob.'; // append

// // commit
// file_put_contents('sample.txt', $content, FILE_APPEND); // 書き込みメソッド
// $content = '';

/* クラスの呼び出し方は以下のようにするものとします。

$file = new MyFileWriter('sample.txt');
$file->append('Hello, Bob.')
    ->newline()
    ->append('Bye, ')
    ->append('Bob.')
    ->newline()
    ->commit()
    ->append('Good night, Bob.')
    ->commit(MyFileWriter::APPEND);

*/

class MyFileWriter
{
    private $filename;
    private $contents;
    public const APPEND = FILE_APPEND;
    function __construct($filename)
    {
        $this->filename = $filename;
    }
    function newline()
    {
        return $this->append(PHP_EOL);
    }
    function append($text)
    {
        $this->contents .= $text;
        return $this;
    }
    function commit($append_flg = null)
    {
        file_put_contents($this->filename, $this->contents, $append_flg);
        $this->contents = '';
        return $this;
    }
}

$file = new MyFileWriter('sample.txt');
$file->append('Hello, Bob.')
    ->newline()
    ->append('Bye, ')
    ->append('Bob.')
    ->newline()
    ->commit()
    ->append('Good night, Bob.')
    ->commit(MyFileWriter::APPEND);
