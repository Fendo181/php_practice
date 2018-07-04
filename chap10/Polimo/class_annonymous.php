<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/05
 * Time: 7:57
 */

interface Runnable {
    function run();
}

class MyClass {
    public function execute (Runnable $rc) {
        // ダミー処理 (本来はなんらかの前処理を実行)
        print "start...";
        // クラス内でインターフェースの抽象メソッドを実行している
        $rc->run();
        print "end...";
    }
}

$cls = new MyClass();
// Rnnable実装クラスを引数にわたす
// new classが無名クラス
$cls->execute(new class implements Runnable {
    public function run() {
        print "Process...";
    }
});