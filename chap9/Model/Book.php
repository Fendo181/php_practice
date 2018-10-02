<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/10/02
 * Time: 22:26
 */

class Book
{
    public $isbn;
    public $title;
    public $price;
    public $publis;
    public $ublished;

    private $_rate; //値引き率

    // インスタンス化時に値引き率をセットする
    public function __construct(float $_rate)
    {
        $this->_rate = $_rate;
    }

    //値引きの後の価格を取得するdiscountメソッド
    public function discount()
    {
        return floor($this->price * (1 - $this->_rate));
    }
}
