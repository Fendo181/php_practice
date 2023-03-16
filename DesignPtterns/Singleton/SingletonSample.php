<?php


class SingletonSample
{

    /**
     * メンバー変数
     * @var int
     */
    private $id;

    /**
     * @var Object
     */
    private static $instance;

    /**
     * IDとして、生成日時のハッシュ値を作成する
     */
    private function __construct()
    {
        $this->id = md5(date('r').mt_rand());
    }

    /**
     *
     * 唯一のインスタンスを返す
     *
     * @return Object|SingletonSample
     */
    public static function getInstance()
    {
        // もしsetされてなかったら初期化する
        if(!isset(self::$instance)) {
            self::$instance = new SingletonSample();
            echo 'A SingletonSample instance was created!';
            echo PHP_EOL;
        }

        return self::$instance;
    }

    /**
     *
     * idを返す
     *
     * @return int
     */
    public function getID()
    {
        return$this->id;
    }

    /**
     * このインスタンスを複製しようとした際に例外処理で許可させないおゆにする
     */
    public final function __clone()
    {
        // TODO: Implement __clone() method.
        throw new RuntimeException('Clone is not allowed against'. get_class($this));
    }


}