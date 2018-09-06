<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/09/05
 * Time: 9:15
 */

require_once '../DbManager.php';

try {
    $db = getDb();
    $db->exec('MECHA KUCHA');
}catch (PDOException $e){
    print "エラーコード{$e->getCode()}";
    print "エラーメッセージ{$e->getMessage()}";
}

