<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/03/30
 * Time: 8:07
 */

// 複数のマッチ文字列あった場合、全て取得する。

$str= "彼の電話番号は0399-88-9875、私の電話番号は0398-99-1234です。郵便番号はどちらも687-1109です。";

function br(){
    echo PHP_EOL;
}
if(preg_match_all('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/',$str, $data, PREG_SET_ORDER)){
    foreach ($data as $item){
        print "電話番号: {$item[0]}";
        br();
        print "市外局番: {$item[1]}";
        br();
        print "市内局番: {$item[2]}";
        br();
        print "加入者番号: {$item[3]}";
        br();
    }
}

//result

//電話番号: 0399-88-9875
//市外局番: 0399
//市内局番: 88
//加入者番号: 9875
//電話番号: 0398-99-1234
//市外局番: 0398
//市内局番: 99
//加入者番号: 1234
