<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/24
 * Time: 9:35
 */

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment: filename = "flower.jpg"');

print file_get_contents('./doc/flower.jpg');