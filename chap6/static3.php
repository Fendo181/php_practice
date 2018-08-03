<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/05/18
 * Time: 7:46
 */


function checkStatic()
{
    static $x =0;
    $x++;
    print "unset前: {$x}";
    unset($x);
    $x = 13;
    print "unset後: {$x}";
}

checkStatic();
checkStatic();
