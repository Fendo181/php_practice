<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/03
 * Time: 8:30
 */

require_once 'MyClass.php';
require_once 'MyClass2.php';
require_once 'MyClass3.php';

//use chap10\NameScope\MyClass;
//use chap10\NameScope\MyClass2;
//use chap10\NameScope\MyClass3;

//(1) use はグローバルスコープ配下、またはNamespace配下で呼び出す
// コンパイルのタイミングでインポートをするので、制御構文ブロックのは配下で呼び出す事はできないです

function hoge() {
//    use chap10\NameScope\MyClass;
    print MyClass::showClass();
}

hoge();



