<!--すべての出力に先立って宣言すべきです-->

<?php setcookie('email', $_POST['email'], time()+(60*60*24*90));?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>クッキー情報</title>
</head>
<body>
<p>クッキー情報を保存しました</p>
</body>
</html>
