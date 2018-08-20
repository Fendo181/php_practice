<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<title>POSTデータ</title>
    <body>
    <!-- action属性にはpost先のファイルを指定する   -->
    <form method="post" action="post2.php">
        <label for="name">名前</label>
        <input id="name" type="text" name="name" size="15">
        <input type="submit" value="送信">
    </form>
    </body>
</html>