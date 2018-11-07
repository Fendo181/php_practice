<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
</head>
<title>checkボックス</title>
<body>
<!-- action属性にはpost先のファイルを指定する   -->
<p>あなたがよく使用するサーバサイド技術はなんですか?</p>
<form method="post" action="check2.php">
    <input id="php" type="checkbox" name="arch" value="PHP">
    <label for="php">PHP<label>
    <input id="jsp" type="checkbox" name="arch" value="jsp&サーブレット">
    <label for="jsp"">JSP&サーブレット<label>
    <input id="asp" type="checkbox" name="arch" value="ASP.NET">
    <label for="asp"">ASP.NET<label>
    <input type="submit" value="送信">
</form>
</body>
</html>
