<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/09/05
 * Time: 9:15
 */

require_once '../DbManager.php';

$db = getDb();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
$db->exec('MECHA KUCHA');

//エラーコードが「00000」がない場合はエラーが発生したとみなす
if($db->errorCode() !== '00000') {
    $info = $db->errorInfo();
    print "エラーコード{$info[0]}";
    br();
    print "エラーコード(ドライバ):{$info[1]}";
    br();
    print "エラーメッセージ{$info[2]}";
}

function br(){
    echo PHP_EOL;
}