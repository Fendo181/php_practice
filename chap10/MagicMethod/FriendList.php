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
    public function __invoke($index)
    {
        echo PHP_EOL;
        print "これは__invokeメソッドで呼び出されました!";
        echo PHP_EOL;
        return $this->list[$index];
    }
}
