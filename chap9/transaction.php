<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/10/02
 * Time: 23:03
 */

require_once 'DbManager.php';

try{
    $db = getDb();
    // 例外処理を有効化
    $db->getAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //トランザクション開始
    $db->beginTransaction();
    $db->exec("INSERT INTO book(isbn,title,price,publish,published)VALUES ('112','独習PHP 第2版',3200,'翔泳社','2010-04-12')");
    // 制約キー違反
    $db->commit();
}catch (PDOException $e){
    //ロールバック
    $db->rollBack();
    print "エラーメッセージ:{$e->getMessage()}";
}
//
//Warning: PDO::getAttribute() expects exactly 1 parameter, 2 given in /Users/endu/src/fendo181/php_repos/chap9/transaction.php on line 14
//エラーメッセージ:SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '11ey 'PRIMARY'%