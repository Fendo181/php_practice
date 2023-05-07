<?php

// ファイルを操作する
// 書き込みモードにするには write の w を指定する
// names.txt がなければ新しく作り、ファイルポインタと呼ばれる特殊な変数を返してくれます
// write の w を指定して実行すると中身が追記されていくのではなくて常にこの内容で上書きされていく
$filePointer = fopen('names.txt','w');
fwrite($filePointer, "endu\ntarou\n");
// 書き込みを終了するには fclose() 関数にファイルポインタを渡す
fclose($filePointer);

/**
~ $ cat names.txt
endu
tarou
**/
