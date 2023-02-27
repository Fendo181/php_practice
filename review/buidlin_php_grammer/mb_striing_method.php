<?php

$input = ' こんにちは! ';
$input = trim($input);

echo mb_strlen($input) . PHP_EOL; // 5
echo mb_strpos($input, 'に') . PHP_EOL; //2

// str_replace() については文字コードが UTF-8 なら日本語もうまく扱える
$input = str_replace('にち', 'ばん', $input); //こんばんわ
echo $input . PHP_EOL;
