<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/10
 * Time: 22:52
 */

trait MyTrait1 {
    public function hoge() {
        print 'MyTrait1';
    }
}

trait MyTrait2 {
    public function hoge() {
        print 'MyTrait2';
    }
}

class MyClass {
    //　トレイト内の同じメソッドがあると競合してしまってエラーがおきる
    use MyTrait1, MyTrait2;
}

$cls = new MyClass();
$cls->hoge();