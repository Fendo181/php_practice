<?php

//IteratorAggregateはPHPが標準でもっているインターフェースです
// 呼び出す事で、配列にイテレータの機能を持たす事ができます。

class FriendList implements IteratorAggregate
{
    // ダミープロパティ
    public $version = '1.0.0';
    public $name = '';
    // Personオブジェクトのリストを格納するためのprivate変数
    private $list = [];

    // getIteratorをオーバライドする。
    // 列にイテレータとしての機能を提供します
    // Traversableそのクラスの中身が foreach を使用してたどれるかどうかを検出するインターフェイスです。
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->list);
    }

    //Personオブジェクトを追加する為のメソッド
    // __invokeメソッドは他のマジックメソッドと違って引数を受け取り、引数を返します。
    public function add(Person $p)
    {
        $this->list[] = $p;
    }

    // オブジェクトを関数として実行します。
    // __invokeメソッドはこのクラスで良く使われる際に利用すると良いでしょう。
    // そうなると、毎回メソッドを呼び出さなくてもクラスに引数を与えるだけで、処理が可能となります。
    public function __invoke($index)
    {
        echo PHP_EOL;
        print "これは__invokeメソッドで呼び出されました!";
        echo PHP_EOL;
        return $this->list[$index];
    }

//     cloneメソッドが呼び出されたときに実行される。
    public function __clone()
    {
        foreach ($this->list as &$value) {
            $value = clone $value;
        }
    }
}



//Wed 1 :MagicMethod [endu]# php clone_deep.php
//object(FriendList)#1 (3) {
//["version"]=>
//  string(5) "1.0.0"
//["name"]=>
//  string(0) ""
//["list":"FriendList":private]=>
//  array(3) {
//    [0]=>
//    object(Person)#2 (2) {
//    ["lastName"]=>
//      string(6) "太郎"
//    ["firstName"]=>
//      string(6) "山田"
//    }
//    [1]=>
//    object(Person)#3 (2) {
//    ["lastName"]=>
//      string(6) "遠藤"
//["firstName"]=>
//      string(6) "太徳"
//    }
//    [2]=>
//    object(Person)#4 (2) {
//    ["lastName"]=>
//      string(6) "高橋"
//["firstName"]=>
//      string(9) "清太郎"
//    }
//  }
//}
