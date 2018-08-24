<?php

$hoge = [
    [
        'admin' => '01',
        'url' => 'http://hoge',
        'origin' => 'http://hoge_aaa',
    ],
    [
        'admin' => '02',
        'url' => 'http://hoge2',
        'origin' => 'http://hoge_aaa2',
    ],
    [
        'admin' => '03',
        'url' => 'http://hoge3',
        'origin' => 'http://hoge_aaa3',
    ]
];

foreach ( $hoge as $key => $value ){
    print $value['admin'];
}