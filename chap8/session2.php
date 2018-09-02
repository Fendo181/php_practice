<!--すべての出力に先立って宣言すべきです-->

<?php

session_start();
$_SESSION['email'] = $_POST['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>セッション情報</title>
</head>
<body>
<p>セッション情報を保存しました</p>
</body>
</html>
