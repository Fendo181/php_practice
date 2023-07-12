<?php

// UNIX タイムスタンプ
echo time().PHP_EOL;

// 2023-07-12 Wednesday
echo date('Y-m-d l') . PHP_EOL;

// mktime()を使うと
// 時、分、秒、月、日、年を指定してあげれば
// その日時での UNIX タイムスタンプができる

// 2020-05-01 Friday
echo date('Y-m-d l', mktime(0,0,0,5,1, 2020)) . PHP_EOL;

// 文字から日時を作る
// 2020-05-02 Saturday
echo date('Y-m-d l', strtotime('2020-05-01 +1 day')) . PHP_EOL;
