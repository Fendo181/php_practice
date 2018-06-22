<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/06/04
 * Time: 23:53
 */

function factorial(int $num){
    if ($num !== 0) {
        return $num * factorial( $num -1);
    }
    return 1;
}

print factorial(4);

