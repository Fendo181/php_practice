<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/04/27
 * Time: 7:54
 */

$str = "7人と小人と白雪姫\n101匹ワンちゃん";

// $strの内容を先頭から検索して&マッチしたものを書き出す。

if (preg_match_all('/^[0-9]{1,}/m', $str, $data)) {
    foreach ($data[0] as $item) {
        print  "マッチング結果: {$item} <br />";
    }
}

/**
 * mをつけない場合
 * マッチング結果: 7 <br />%
 *
 * mをつける場合
 * マッチング結果: 7 <br />マッチング結果: 101 <br />%
 */
