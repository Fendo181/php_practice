<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/04/27
 * Time: 7:27
 */

function checkScope()
{
    // loca;
    static $x;
    return ++$x;
}

print checkScope(); #1
print checkScope(); #2
print  $x; //null
