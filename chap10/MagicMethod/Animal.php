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

    /*
     * @name メソッド名
     * @$arguments 引数名
     */
    public function __call($name, $arguments)
    {
        var_dump($arguments);
        // 引数が渡されなかった場合はメソッド名に対応するキーの値を取得する。
        if(count($arguments) === 0) {
            return $this->animals[$name];
        // 引数が渡されなかった場合は、メソッド名に対応するキーの引数の値を設定する。
        } else {
            var_dump($arguments[0]);
            return $this->animals[$name] = $arguments[0];
        }
    }
}