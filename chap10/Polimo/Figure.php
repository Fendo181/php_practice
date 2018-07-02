<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/02
 * Time: 8:55
 */

class Figure {
    // プロパティを定義
    protected $width;
    protected $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height=$height;
    }

    //面積を求める。
    public function getArea() :float
    {
        return 0;
    }
}

