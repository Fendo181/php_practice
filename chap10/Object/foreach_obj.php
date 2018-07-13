<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/13
 * Time: 10:00
 */

require_once 'MyClass.php';

// インスタンス化
$cls = new MyClass();

// privateとprotectedは表示できない
foreach ($cls as $key => $value) {
    print "{$key} : {$value}";
    echo PHP_EOL;
}

echo PHP_EOL;
print '__________';
echo PHP_EOL;

//MyClassオブジェクトのプロパティをリスト表示
// クラス内部のshowメソッドなので、private,protectedがついたプロパティでも表示できる。
$cls->showProperty();