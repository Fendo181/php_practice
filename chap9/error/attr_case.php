<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/09/10
 * Time: 23:50
 */

require_once '../DbManager.php';

$db = getDb();
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
print_r($db->query('SELECT * FROM')->fetchAll(PDO::FETCH_ASSOC));
