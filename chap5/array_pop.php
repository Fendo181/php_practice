<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/02/05
 * Time: 23:47
 */

$data = ['高江','青木','土井'];
# 末尾に追加
array_push($data,'遠藤', '高橋');
print_r($data);

# 末尾の値を抜く・この場合は高橋がぬける。
array_pop($data);
print_r($data);


