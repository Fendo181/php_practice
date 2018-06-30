<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/05/17
 * Time: 7:15
 */

function checkScope(): string {
    require_once 'scope_include.php';
    return $scope;
}

# 関数内で読むこむとローカルスコープになる。
print checkScope(); #アクセスはできる。

# 関数外で読む事とグローバルスコープになる。
print $scope; #アクセスできない