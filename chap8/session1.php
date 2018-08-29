<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/29
 * Time: 10:07
 */

require_once 'Encode.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8" />
</head>
<title>セッション情報</title>
<body>
<!-- action属性にはpost先のファイルを指定する   -->
<form method="POST" action="session2.php">
    <label for="email">メールアドレス</label>
    <input id="email" type="text" name="email" size="40" value="<?=e($_SESSION['email'] ?? '') ?>" />
    <input type="submit" value="送信">
</form>
</body>
</html>
