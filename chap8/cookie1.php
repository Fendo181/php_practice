<?php require_once 'Encode.php'; ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<title>クッキー情報</title>
    <body>
    <!-- action属性にはpost先のファイルを指定する   -->
    <form method="post" action="cookie2.php">
        <label for="email">メールアドレス</label>
        <input id="email" type="text" name="email" size="40" value="<?=e($_COOKIE['email'] ?? '') ?>" />
        <input type="submit" value="送信">
    </form>
    </body>
</html>
