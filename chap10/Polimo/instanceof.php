<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/04
 * Time: 8:57
 */

require_once 'Triangle.php';
require_once 'Square.php';

$figs = [];
$figs[] = new Triangle(10,5);
$figs[] = new Square(10,5);
$figs[] = new Triangle(3,3);

var_dump(get_class_methods($figs[2]));


foreach($figs as $fig) {
    // IFigureインターフェースを実装している場合のみgetArea実行できる
    if($fig instanceof IFigure) {
        print '<p>'. get_class($fig). ':'. $fig->getArea(). '</p>';
        echo PHP_EOL;
    }
}
