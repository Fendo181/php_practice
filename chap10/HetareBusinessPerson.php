<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/01
 * Time: 13:20
 */

require_once 'BusinessPerson.php';

class HetareBusinessPerson extends BusinessPerson {
    // BusinessPersonクラスのworkメソッドをオーバライド
    public function work() {
//        BusinessPerson::work(); これでもいける
        parent::work(); // superクラス（BusinessPerson）の親メソッド
        print 'ってな話ってわけですよ';
    }
}

$hatare_business_person = new HetareBusinessPerson('三谷', '先生');
$hatare_business_person->work();