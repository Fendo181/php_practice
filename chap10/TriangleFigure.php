<?php
/**
 * Created by PhpStorm.
 * User: futoshi.endo
 * Date: 2018/06/30
 * Time: 15:00
 */

class TriangleFigure
{
    public $base;
    public $height;

    public function __construct()
    {
        $this->base = 1;
        $this->height =1;
    }

    public function getArea(): float {
        return $this->base * $this->height /2;
    }
}



