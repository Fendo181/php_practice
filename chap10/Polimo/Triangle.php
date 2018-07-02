<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/02
 * Time: 8:57
 */

require_once 'Figure.php';

class Triangle extends Figure
{
    // メソッドをオーバライドする
    // 三角形の面積
    public function getArea() :float
    {
        return $this->width*$this->height/2;
    }
}