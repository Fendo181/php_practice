<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/02
 * Time: 8:57
 */

require_once 'Figure.php';

class Square implements IFigure
{
    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // メソッドをオーバライドする
    // 四角形の面積
    public function getArea() :float
    {
        return $this->width*$this->height;
    }
}