<?php

class Singleton
{
    private static ?self $instance = null;

    private function __construct() { }

    public static function getInstance(): static
    {
        return self::$instance ??= new static();
    }

    public function doSomething(): void
    {
        // シングルトンパターンでインスタンス化されたクラスのメソッド
    }
}
