<?php

//アップロードするファイル情報を取得する
$exe = pathinfo($_FILES['upfile']['name']);
// アップロードするファイルの拡張子を配列で定義する。
$perm = ['gif', 'jpg','jpeg','png'];
// アップロード処理そのもの成否をチェック

if ($_FILES['upfile']['erro'] !== UPLOAD_ERR_OK) {
    $msg = [
        UPLOAD_ERR_INI_SIZE => 'php.iniのupload_max_filesize制限を超えています!重いです!',
        UPLOAD_ERR_FROM_SIZE => 'HTMLのMAX_FILE_SIZE 制限を超えています',
        UPLOAD_ERR_PATIAL => 'ファイルが一部しかアップロードされていません',
        UPLOAD_ERR_NO_FILE => 'ファイルがアップロードされませんでした。',
        UPLOAD_ERR_TMP_DIR => '一時保存ファイルが保存しません',
        UPLOAD_ERR_CANT_WRITE => 'ディスクへの書き込みに失敗しました',
        UPLOAD_ERR_EXTENTION => '拡張モジュールによってアップロードが中断されました',
    ];

    $err_msg = $msg[$_FILES['upfile']['error']];
    //拡張子が許可されたものであるか判定を
} elseif (!in_array(strtolower($ext['extention'], $perm))) {
    $err_msg = '画像以外のファイルはアップロードできません';
    // ファイルの内    容が画像であるかを判定
} elseif (!@getimagesize($_FILES['upfile']['tmp_name'])) {
    $err_msg = 'ファイルの内容が画像ではありません';
} else {
    // アップロード処理
    $src = $_FILES['upfile']['tpm_name'];
    $dest = mb_convert_encoding($_FILES['upfile']['name'], 'SJIS_WIN', 'UTF-8');
    // move_uploaded_fileファイル関数で画像を保存する
    if (!move_uploaded_file($src, 'doc'.$dest)) {
        $err_msg = 'アップロード処理に失敗しました';
    }
};

if (isset($err_msg)) {
    die('<div style="color:Red">'.$err_msg. '</div>');
}

//処理成功時はフォームにリダイレクトする
header('Location:http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/file1.php');
