<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/20
 * Time: 22:20
 */

$data = ['endo','takahashi','nomoto'];
print_r($data);

foreach ($data as &$value){
    $value = 'New'.$value;
}
//　元の配列の中身も変更が加えられる。
print_r($data);
