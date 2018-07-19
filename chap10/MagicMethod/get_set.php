<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/20
 * Time: 8:40
 */

require_once 'MyMail.php';

$m = new MyMail();

//必須のプロパティを設定
$m->to = 'efef1201@yahoo.co.jp';
$m->subject = 'テストメールです2';
$m->message = 'お元気ですか?';

// 任意のプロパティを設定する
$m->From = 'endo1201@yahoo.co.jp';
$m->X_Mailer = 'MyMail:1.0';
$m->X_Priority = 1;
$m->X_MSMail_Priority = 'High';

// メール送信
$m->send();