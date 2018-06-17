<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/06/17
 * Time: 10:49
 */

function generator() {
    yield 'あいうえお';
    yield 'かきくけこ';
    yield 'さしすせそ';
}


foreach (generator() as $value){
    print $value;
    echo PHP_EOL;
}

