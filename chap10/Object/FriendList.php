<?php

//IteratorAggregateはPHPが標準でもっているインターフェースです

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
    public function add(Person $p)
    {
        $this->list[] = $p;
    }
}
