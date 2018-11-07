<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<title>クエリ情報</title>
    <body>
    <!-- action属性にはpost先のファイルを指定する   -->
    <a href="link2.php?keyword=<?= urlencode('クエリ情報 (&%) ') ?>"> 結果を確認する <a/>
    </body>
</html>
