<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/08/23
 * Time: 8:59
 */

// ページの有効期限を過去に設定
header('Exepires:, Sun, 15, Jan 1970 00:00:00 GMT');

// 最終更新日を過去に設定
header('Last-Modified: '. gmdate("D, d M Y H:i:s"). ' GMT');

// キャッシュを無効化する
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0, false');
