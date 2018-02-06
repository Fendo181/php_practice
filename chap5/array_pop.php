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
echo PHP_EOL;
print_r($data);

# 末尾の値を抜く・この場合は高橋がぬける。
array_pop($data);
echo PHP_EOL;
print_r($data);

//先頭から値を抜く。 '高江が抜かれている。'
print array_shift($data);
echo PHP_EOL;
print_r($data);

//先頭から値を抜く。
print array_unshift($data,'endo','takahashi');
echo PHP_EOL;
print_r($data);




