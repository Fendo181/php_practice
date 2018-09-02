<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アップロード処理</title>
</head>
<body>
<!-- アップロード処理時にはenctype属性に注意する -->
<form action="file2.php" method="post" enctype="multipart/form-date">
    <label for="upfile">ファイルのパス:</label>
    <input type="hidden" name="max_file_size" value="1000000" />
    <input id="file" type="file" name="upfile" size="40">
    <input type="submit" value="アップロード">
</form>
</body>
</html>

