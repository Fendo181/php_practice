<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/06/28
 * Time: 8:20
 */

class Area {
    const PI = 3.14;

    public static function circle(float $redius): float {
        return pow($redius, 2) * self::PI;
    }
}