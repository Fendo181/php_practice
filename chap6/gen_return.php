<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/06/19
 * Time: 8:28
 */

function readLines(string $path)
{
    $i = 0;
    $file = fopen($path,'rb') or die('ファイルが見つかりませんでした');
    while($line = fgets($file, 1024)) {
        $i++;
        yield $line;
    }
    fclose($file);
    // 読み込んだテキストの行数を返す
    return $i;
}

// sample.datから行単位にテキストを出力
$gen = readLines('sample.dat');
foreach($gen as $line) {
    print $line. '</br>';
}

print "{$gen->getReturn()}行ありました。";
