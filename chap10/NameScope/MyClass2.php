<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/02
 * Time: 9:12
 */
namespace chap10\NameScope;

class MyClass2 {
    public static function showClass() {
        print __CLASS__;
        echo PHP_EOL;
        echo "MyClass2";
    }
}