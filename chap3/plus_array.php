<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/10
 * Time: 8:04
 */

//配列の加算

$array1 = [
            'Apple' => 'Red',
            'Orange' => 'Yellow',
            'Melon' => 'Green'
];

$array2 = [
            'Grape' => 'Purple',
            'Apple' => 'Green',
            'Straberry' => 'Red'
];

print_r($array1+$array2);

$array_num1 = [1,3,5];
$array_num2 = [2,3,6];

print_r($array_num1 + $array_num2);

/*
 Array
(
    [Apple] => Red
    [Orange] => Yellow
    [Melon] => Green
    [Grape] => Purple
    [Straberry] => Red
)
Array
(
    [0] => 1
    [1] => 3
    [2] => 5
)

 */
