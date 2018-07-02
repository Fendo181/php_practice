<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/02
 * Time: 8:59
 */

require_once 'Triangle.php';
require_once 'Square.php';

$tri = new Triangle(5,10);
$squ = new Square(5,10);

print "三角形の面積: {$tri->getArea()} <br>";
echo PHP_EOL;
print "四角形の面積: {$squ->getArea()} <br>";