<?php

$name = 'Apple';
$score = 32.246;

$info = "[$name][$score]";
echo $info . PHP_EOL;

$info = sprintf("[%15s][%10.2f]", $name, $score);
echo $info . PHP_EOL;

// name を左詰めにするにはこちらにマイナス記号をつける
// $scoreの余った桁を0で埋めるには 010.2f
// $info = sprintf("[%-15s][%010.2f]", $name, $score);
// echo $info . PHP_EOL;


// フォーマットで表示したいという場合は、 sprintf() ではなくて、printf() としてあげる
$info = printf("[%-15s][%010.2f]".PHP_EOL, $name, $score);
echo $info . PHP_EOL;
