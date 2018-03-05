<?php

$data = ['img15.png', 'img5.png', 'img2.png', 'img18.png'];
//文字列順
sort($data,SORT_STRING);
print_r($data);

$data2 = ['img15.png', 'img5.png', 'img2.png', 'img18.png'];
//自然順
sort($data2,SORT_NATURAL);
print_r($data2);

