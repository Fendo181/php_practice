<?php
require_once 'DbManager.php';

var_dump($_POST);

try {
    //データベースへの接続
    $db = getDb();
    // INSERT命令の準備
    $str = $db->prepare('INSERT INTO book(isbn,title, price, publish, published) 
                                  VALUES(:isbn, :title, :price, :publish, :published)');
    // INSERT命令にポストのデータの内容をセットする。
    $str->bindValue(':isbn', $_POST['isbn']);
    $str->bindValue(':title', $_POST['title']);
    $str->bindValue(':price', $_POST['price']);
    $str->bindValue(':publish', $_POST['publish']);
    $str->bindValue(':published', $_POST['published']);
    // INSERT命令実行する
    $str->execute();
    echo "うまくいったぽい";
    // 処理後は入力フォームにリダイレクト
    header('Location: http://localhost:8000/insert_form.php');
} catch (PDOException $e) {
    print "エラーメッセージ {$e->getMessage()}";
}
