<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/02/01
 * Time: 23:31
 */

$array1 = [1,3,5];
$array2 = [1,3,6];

$result = array_merge($array1, $array2);

// 連想配列のキーが重複している場合は「後者」が優先される。
// インデックス番号が重複している場合には、新たなインデックス番号が振られる。
print_r($result);
