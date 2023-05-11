<?php

// ファイルを操作する
// appendを意味する a を指定する
$filePointer = fopen('names.txt','a');

fwrite($filePointer, "endu1\n");
fwrite($filePointer, "endu2\n");

/*
PHPファイル操作をする際にはプログラムの実行が終わると自動的にクローズされるので
このあとにファイル操作がなければ、実は書かなくても OK
*/

// fclose($filePointer);
