<?php
// 事前準備
file_put_contents('data/taro.txt',"taro\n");
file_put_contents('data/jiro.txt',"jiro\n");

// $dp = opendir('data');
// while (($item = readdir($dp)) != false) {
//   // ディレクトリの配置を表す記号は除外する
//   if ($item === '.' || $item === '..') {
//     continue;
//   }
//   echo $item.PHP_EOL;
// }

// .txtにマッチするファイルを取得する
foreach(glob('data/*.txt') as $item ) {
  // echo $item . PHP_EOL;
  // ファイル名だけを取得したい
  echo basename($item).PHP_EOL;
}
