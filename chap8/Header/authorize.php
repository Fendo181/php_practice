<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/24
 * Time: 9:25
 */

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    // 認証ユーザが未設定の場合は未認証ステータスを発行
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="SelfPHP"');
    print 'この画面のアクセスは拒否されました';
    die();
} else {
    // 認証に成功した場合に応じてメッセージを送る
    if (($_SERVER['PHP_AUTH_USER']) === 'admin' && $_SERVER['PHP_AUTH_PW'] === 'admin_pass') {
        print '正しく認証されました！';
    } else {
        print 'ユーザ名、パスワードが間違っています！';
    }
}
