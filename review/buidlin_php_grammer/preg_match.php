<?php

$input = 'Call us at 03-3001-1256 or 03-3015-3222';
// 正規表現
// 数値が 2 桁分 - 数値が 4 桁分 - 数値が 4 桁分と書いてあげましょう。
$pattern = '/\d{2}-\d{4}-\d{4}/';

// マッチした数を出力する
preg_match($pattern, $input, $matches);
print_r($matches); // 03-3001-1256

// preg_match() は最初に見つかった結果だけを $matches に格納する
// 全ての見つかった結果を格納したい場合は preg_match_all()
preg_match_all($pattern, $input, $matches);
print_r($matches); // 03-3001-1256,03-3015-3222

// 番号を伏せ字にする

$input = preg_replace($pattern, '**-****-****',$input);
echo $input . PHP_EOL; // Call us at **-****-**** or **-****-****
