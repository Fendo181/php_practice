<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/20
 * Time: 22:15
 */

$data = [ 'endo' => '23',
          'takahashi' => '27',
          'mitani' => '56',
          'nomoto' => '23'
        ];

foreach ($data as $key => $value) {
    print "{$key}の年齢は{$value}です";
}
