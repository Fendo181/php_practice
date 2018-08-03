<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/24
 * Time: 22:37
 */

mb_internal_encoding('utf-8');
$str = "EndoTechBlog";

// 0文字目から4文字分
print mb_substr($str, 0, 4);
echo PHP_EOL;
// ５文字目以降
print mb_substr($str, 4);
echo PHP_EOL;
//0文字目以降末にから4文字カットした。
print mb_substr($str, 0, -4);
