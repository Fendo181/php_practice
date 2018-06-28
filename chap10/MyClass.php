<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/06/29
 * Time: 8:36
 */

class MyClass
{

    public static function square($width, $hight)
    {
        return $width*$hight;
    }

}

echo MyClass::square(10,12);