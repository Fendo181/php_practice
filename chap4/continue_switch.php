<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/20
 * Time: 23:06
 */

for ($i = 1; $i < 4; $i++) {
    $result = 0;
    switch ($i) {
        case 1:
        case 3:
            $result = $i * $i;
            // no break
        case 2:
            //  switch文内ではbreakとして働く
            continue 2;
    }
    print "{$i}の二乗は{$result}です!";
    echo PHP_EOL;
}


//1の二乗は1です!
//2の二乗は0です!
//3の二乗は9です!
