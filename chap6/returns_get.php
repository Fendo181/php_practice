<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/05/28
 * Time: 8:44
 */

require_once('returns.php');

$result = max_min(10,20,-5,34,78);
print_r($result);

list($max,$min) = max_min(10,20,-5,34,78);
print "最大値: {$max}、最小値: {$min}";