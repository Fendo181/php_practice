<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/02
 * Time: 9:12
 */

// (1)名前空間はファイルの先頭で定義する事
// (2)フォルダ構造は名前空間の階層に準ずる事
// (3)ひとつのファイルは1つの名前空間に

namespace chap10\NameScope\hoge;

class MyClass
{
    public static function showClass()
    {
        print __CLASS__;
    }
}
