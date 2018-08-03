<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/06/27
 * Time: 10:12
 */

class Area
{
    public static function circle(float $redius): float
    {
        return pow($redius, 2) * 3.14;
    }
}
