<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/26
 * Time: 9:34
 */

class Animal
{
    protected $animals= [];

    // 未定義のメソッドが呼び出された場合に実行される。
    public function __call($name, $arguments)
    {
        // 引数が渡されなかった場合はメソッド名に対応するキーの値を取得する。
        if(count($arguments) === 0) {
            return $this->animals[$name];
        // 引数が渡されなかった場合は、メソッド名に対応するキーの引数の値を設定する。
        } else {
            $this->animals[$name] = $arguments[0];
        }
    }
}