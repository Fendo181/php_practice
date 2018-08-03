<?php

//sort:昇順
//rsort:降順
//asort:値をソートキーにもった昇順
//rasort:値をソートキーにもった降順
//ksort:キーをソートキーにもった昇順
//krsort:キーをソートキーにもった降順

$data = ['endo','takahashi','amazon'];
//SORT_STRING flag は文字列としてソートする。
sort($data, SORT_STRING);
print_r($data);

//逆ソートになる。
rsort($data, SORT_STRING);
print_r($data);

//ここでindexを指定しているが、値の配列ではインデックス番号が初期化されれしまっているので、ソートの意味がない。
$data2 = ['endo'=> 1,'takahashi' => 1,'amazon' => 9];
sort($data2, SORT_STRING);
print_r($data2);

//実行結果
//(
//[0] => 1
//    [1] => 1
//    [2] => 9
//)

//値でソートを行う、
$data3 = ['endo'=> 1,'takahashi' => 3,'amazon' => 2];
asort($data3, SORT_STRING);
print_r($data3);

//キーでソートを行う
$data4 = ['endo'=> 1,'takahashi' => 3,'amazon' => 2];
ksort($data4, SORT_STRING);
print_r($data4);
