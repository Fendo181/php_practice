<?php

require_once 'DbManager.php';
require_once 'Model/Book.php';

$db = getDb();

//isbn列のキーに書籍情報を取得
$stt = $db->query("SELECT * FROM book WHERE isbn='111'");
//取得した情報をBookクラスにフェッチする
if ($row = $stt->fetchObject('Book', [0.5])) {
    print "{$row->title}:{$row->discount()}円"; //エンドウの整体:500円
}
