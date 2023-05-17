<?php

// 事前にテストデータを作成する

// $filePointer = fopen('names.txt','a');
// fwrite($filePointer, "endu1\n");
// fwrite($filePointer, "taro\n");
// fwrite($filePointer, "saburo\n");

// readモードで読み込む
$fp = fopen('names.txt','r');
// freadで書き込んだファイルから内容を読み込む
$contents = fread($fp,filesize('names.txt'));
fclose($fp);
echo $contents;


// $line = fgets($fp);

// fgets 関数を使えば、 1 行ずつ読み込んでいくことができます
// fgetsは読み込むことがなくなったら false を返す
// したがって while() を使って読み込むものがなくならない限りと書いてあげると全行を出力できます
$fp = fopen('names.txt','r');
while (($line = fgets($fp)) !== false) {
  echo $line;
}

fclose($fp);
