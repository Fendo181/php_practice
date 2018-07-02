<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/02
 * Time: 8:57
 */

require_once 'Figure.php';

class Triangle implements IFigure {

    // プロパティを定義
    private $width;
    private $height;

    public function __construct(float $width, float $height)
    {
            $this->width = $width;
            $this->height = $height;
    }

    // メソッドをオーバライドする
    // 三角形の面積
    public function getArea() :float
    {
        return $this->width*$this->height/2;
    }
}