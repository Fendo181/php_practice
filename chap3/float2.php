<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/09
 * Time: 23:20
 */

$add = bcadd(0.1,0.7,1);
$mul = bcmul($add,10,1);
print floor($mul); #7