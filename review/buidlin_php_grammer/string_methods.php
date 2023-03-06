<?php

$input = ' dot_endu ';

// 文字数をカウントする
echo strlen($input).PHP_EOL;

// 前後の空白や改行を除去する
$tirmedInput = trim($input);
echo strlen($tirmedInput).PHP_EOL;

// 文字列の中に「_」があるかを探す
echo strpos($input,'_').PHP_EOL;

// 文字列の特定の文字を別の文字に置き換える
$replacedInput = str_replace('_','-',$input);
echo $replacedInput.PHP_EOL; // dot-endu
