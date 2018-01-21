<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/01/20
 * Time: 22:52
 */

for($i=1; $i <10; $i++){
    for($j =1; $i < 10; $j++){
        $result = $i * $j."\t";;
        if($result > 40){ break 2; }
        print "{$result}";
    }
    echo PHP_EOL;
}