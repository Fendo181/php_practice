<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/24
 * Time: 6:48
 */

class Human
{
    private $human = [];

    // 未定義のプロパティをisset関数で判定すると、$humanのキーをチェックする。
    public function __isset($name)
    {
        return isset($this->human[$name]);
    }

    // 未定義のプロパティをunset関数で判定すると、$humanのキーを削除する。
    public function __unset($name)
    {
        unset($this->human[$name]);
    }

}