<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/20
 * Time: 22:28
 */

$data = ['endo', 'takahashi','nomoto'];
foreach ($data as &$value){
    var_dump($data);
    if ($value === 'nomoto'){ $data[] = 'mitani'; }
}
var_dump($data);

// 結果
//array(4) {
//    [0]=>
//  string(4) "endo"
//    [1]=>
//  string(9) "takahashi"
//    [2]=>
//  string(6) "nomoto"
//    [3]=>
//  &string(6) "mitani"
//}
