<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/02
 * Time: 10:00
 */

namespace chap10\NameScope;

// 非修飾
// グローバル名前空間に属するPersonクラスを表している。


require_once 'MyClass.php';
print MyClass::showClass(); ## chap10\hoge\MyClass%

