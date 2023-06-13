<?php

// file_put_contents('data/taro.txt',"taro\n");
// file_put_contents('data/jiro.txt',"jiro\n");

// ディレクトリを操作を行う
$dp = opendir('data');
while (($item = readdir($dp)) != false) {
  // ディレクトリの配置を表す記号は除外する
  if ($item === '.' || $item === '..') {
    continue;
  }
  echo $item.PHP_EOL;
}
