<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/02
 * Time: 8:55
 */

abstract class Figure {
    // プロパティを定義
    protected $width;
    protected $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height=$height;
    }

    //抽象メソッド(かならずサブクラスでメソッドオーバライドさせておく必要がある)
    //中身を記述してはならない。
    protected abstract  function getArea() :float;
}

