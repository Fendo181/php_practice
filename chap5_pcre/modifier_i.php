<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/04/27
 * Time: 7:41
 */

$msg = <<< EOF
このサンプルはサポートサイト「サーバサイド技術屋の学び舎(http://wwww.yahooo.co.jp)」
から入手できます。執筆のノウハウ集[WINGS Knowledge]
(HTTP: //www31.atwiki.jp/wingpost)もどうぞ
EOF;
// //www31.atwiki.jp/wingpost
print preg_replace('|http(s)?://([\w-]+\.)+[\w-]+(/[\w- ./?%&=]*)?|', '<a href="$0">$0</a>', $msg);
