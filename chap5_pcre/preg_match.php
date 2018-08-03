<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/03/23
 * Time: 8:10
 */

$str= "彼の電話番号は0399-88-9875、私の電話番号は0398-99-1234です。郵便番号はどちらも687-1109です。";

// 戻り値で返ってくるのではなく、&$matchesに反映される。
// flagでPREG_OFFSET_CAPTUREを指定する事で、登場位置も表示してくれる。
if (preg_match('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str, $data, PREG_OFFSET_CAPTURE)) {
    \
    print_r($data);
//    print "電話番号:  {$data[0]}"; //マッチした全体の文字列
//    print "支局番号:  {$data[1]}"; //サブマッチ文字列
//    print "支内番号:  {$data[2]}";  //サブマッチ文字列
//    print "加入者番号: {$data[3]}";  //サブマッチ文字列
}
