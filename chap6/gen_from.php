<?php

function readFiles(array $files)
{
    foreach ($files as $file) {
        yield from readLines($file);
    }
}

function readLines(string $path)
{
    $file = fopen($path, 'rb') or die('ファイルが見つかりませんでした');
    while ($line = fgets($file, 1024)) {
        yield $line;
    }
    fclose($file);
}

foreach (readFiles(['sample.dat', 'sample1.dat']) as $line) {
    print $line;
}
