<?php require_once './Encode.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
</head>
<title>ヘッダ情報</title>
<body>
<table border="1">
<?php
// $_SERVERのキー・値を順に取得する
foreach($_SERVER as $key => $value) {
    // ($key)が「HTTP_」で始まる場合のみ、その値を出力する
    if(mb_strpos($key, 'HTTP') === 0 ) {
?>

<tr valign="top">
<th><?= e($key) ?></th>
<th><?= e($value) ?></th>
</tr>

<?php
    }
}
?>

</table>
</body>
</html>
