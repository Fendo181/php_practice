<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/06
 * Time: 10:20
 */

trait AccessorTrait
{
    // 未定義のプロパティを設定すると、配列propsに値を設定
    public function __set($name, $value)
    {
        // キーの有無をチェックし、存在しないキーをはエラー
        if ($this->props[$name]) {
            $this->props[$name] = $value;
        } else {
            throw new Exception("{$name}プロパティは存在していません!");
        }
    }

    public function __get($name)
    {
        // キーの有無をチェックし、存在しないキーをはエラー
        if ($this->props[$name]) {
           return $this->props[$name];
        } else {
            throw new Exception("{$name}プロパティは存在していません!");
        }
    }
}

class MyTriangle {
    // アクセサトレイトを有効化させる
    use AccessorTrait;

    // プロパティを連想配列で準備しておく
    private $props = [
        'base' => 1,
        'height' => 1
    ];

    public function getArea(): float {
        // __get
        return $this->base * $this->height /2;
    }
}

$cls = new MyTriangle();
// __set
$cls->base = 10;
$cls->height = 5;
print $cls->getArea();

