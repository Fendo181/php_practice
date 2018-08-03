<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/03
 * Time: 8:57
 */

require_once 'MyClass.php';
require_once 'hoge/MyClass.php';

use chap10\NameScope\MyClass;
use chap10\NameScope\hoge\MyClass as SubClass;

print MyClass::showClass(); #chap10\NameScope\MyClass
print SubClass::showClass(); #MyClass1chap10\NameScope\hoge\MyClass%
