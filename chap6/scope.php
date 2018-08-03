<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/04/27
 * Time: 7:14
 */

/*
 * グローバル変数とローカル変数は、スコープの異なる変数は、名前が同一でも別の変数として扱われます。
 */
// global
$x = 10;

function checkScope(): int
{
//    local
//    ここは暗黙的に変数はなしで、0とみなされるので、1を返す。
    return ++$x;
}

print checkScope();
print $x;

#result
//Notice: Undefined variable: x in /Users/endu/src/fendo181/php_repos/chap6/scope.php on line 12
//110%
