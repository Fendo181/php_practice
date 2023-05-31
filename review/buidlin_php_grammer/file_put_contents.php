<?php

$contents = "taro\njiro\nsaburo\n";

// fopen() を使わずにファイル操作をする関数

// file_put_contents 書き込む
file_put_contents('names.txt',$contents);

// file_get_contents 読むこむ
file_get_contents('names.txt');
echo $contents;

// 1行ずつ配列の要素としてflie読み込むこともできる
// $lines = file('names.txt');
// 末尾の改行を無視して読むこむ

$lines = file('names.txt',FILE_IGNORE_NEW_LINES);
var_dump($lines);
