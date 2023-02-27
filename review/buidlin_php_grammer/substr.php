<?php

$input = '20200320Item-A  1200';

$date = substr($input,0,8);
$product = substr($input,8,8);
// $amount = substr($input,16,4);
// 最後までとしたい場合は、最後の引数を省略しても良い
$amount = substr($input,16,4);

echo $date.PHP_EOL; // 20200320
echo $product.PHP_EOL; // Item-A
echo $amount.PHP_EOL; // 1200

//3桁毎に,を入れる。
echo number_format($amount).PHP_EOL;

// 文字列の置換
$input = substr_replace($input,'Item-B',8,8);
echo $input.PHP_EOL; // 20200320Item-B1200
