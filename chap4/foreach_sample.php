<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/22
 * Time: 8:09
 */

$data = [10,25,50];

foreach ($data as &$item) {
    $item = $item * 1.5;
}
print_r($data);
