<?php

/**
 * Class AbstractDisplay
 */
abstract class AbstractDisplay
{
    /**
     * @var 表示するデータ
     */
    private $data;

    /**
     * AbstractDisplay constructor.
     */
    public function __construct($data)
    {
        if(!is_array($data)) {
            $data = [$data];
        }

        $this->data = $data;
    }

    /**
     * template method
     */
    public function display() {
        $this->displayHead();
        $this->displayBody();
        $this->displayFooter();
    }

    /**
     * dataを取得する
     */
    public function getData(){
        return $this->data;
    }

    /**
     * ヘッダを表示する
     */
    protected abstract function displayHead();

    /**
     * ボディを表示する
     */
    protected abstract function displayBody();

    /**
     * フッタを表示する
     */
    protected abstract function displayFooter();
}
