<?php

class Singleton
{
    private static ?self $instance = null;

    private function __construct() { }

    public static function getInstance(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function doSomething(): void
    {
        // シングルトンパターンでインスタンス化されたクラスのメソッド
    }
}
