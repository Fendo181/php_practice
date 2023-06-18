<?php

file_put_contents('data/taro.txt',"taro\n");
file_put_contents('data/jiro.txt',"jiro\n");


if(!file_exists('data/saburo.txt')) {
  echo 'Saburo not here!'.PHP_EOL;
  exit; // ここで処理を止める
}

// ファイルが存在しているかを確認する
if(file_exists('data') === true) {
  echo 'data exists!'. PHP_EOL;
}

// 書き込み権限があるのかを確認する
if(is_writable('data/taro.txt') === true) {
  echo 'taro is writable!'. PHP_EOL;
}

// 読み込み権限があるのかを確認する
if(is_readable('data/taro.txt') === true) {
  echo 'taro is readable!'. PHP_EOL;
}
