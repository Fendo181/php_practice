<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/05
 * Time: 8:26
 */

require_once 'MachineTrait.php';

class Fax {
    // トレイトをインポートする
    use MachineTrait; ///この時点でFaxクラスにはプロパティもメソッドも使えるようになっている

    public function send() {
        print 'sendeing Fax...sended!';
    }
}

$fx = new Fax();
$fx->run();
$fx->send();