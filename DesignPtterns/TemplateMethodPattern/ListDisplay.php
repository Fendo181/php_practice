<?php

require_once 'AbstractDisplay.php';


/**
 * Class ListDisplay
 */
class ListDisplay extends AbstractDisplay
{
    /**
     * ヘッダを表示させる
     */
    protected function displayHead()
    {
        echo '<dl>';
    }

    /**
     * ボディを表示させる
     */
    protected function displayBody()
    {
        foreach ($this->getData() as $key => $value) {
            echo '<dt>Item'.$key.'</dt>>';
            echo '<dd>'.$value.'</dd>>';
        }
    }

    /**
     * フッタを表示させる。
     */
    public function displayFooter()
    {
        echo '</dl>';
    }
}