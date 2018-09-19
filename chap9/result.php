<?php
require_once 'DbManager.php';
require_once 'Encode.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>結果セット</title>
</head>
<body>
<table border="1">
<tr>
<th>ISBNコード</th>
<th>書名</th>
<th>価格</th>
<th>出版社</th>
<th>刊行日</th>
</tr>
<!-- データベースへの接続を確立させる。 -->
<?php
try {
    //データベースへの接続を確立
    $db = getDb();
    // SELECT命令の実行
    $stt = $db->prepare('SELECT * FROM book ORDER BY published DESC');
    $stt->execute();

    //結果セットの内容を表示する。
    while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
        ?>
<!-- データを表示する -->
<tr>
<td><?=e($row['isbn']) ?></td>
<td><?=e($row['title']) ?></td>
<td><?=e($row['price']) ?></td>
<td><?=e($row['publish']) ?></td>
<td><?=e($row['published']) ?></td>
</tr>

<?php
    }
} catch (PDOException $e) {
    print "エラーメッセージ:{$e->getMessage()}";
}
?>
</table>
</body>
</html>



