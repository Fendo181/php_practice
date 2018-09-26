<?php

require_once 'DbManager.php';

$db = getDb();
$stt = $db->query('SELECT * FROM book order BY published DESC');
print_r($stt->fetchAll(PDO::FETCH_ASSOC));