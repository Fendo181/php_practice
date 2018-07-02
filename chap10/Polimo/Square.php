<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/02
 * Time: 8:57
 */

require_once 'Figure.php';

class Square extends Figure
{
    // メソッドをオーバライドする
    // 四角形の面積
    public function getArea() :float
    {
        return $this->width*$this->height;
    }
}