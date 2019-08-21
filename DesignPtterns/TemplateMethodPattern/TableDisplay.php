<?php

require_once 'AbstractDisplay.php';

class TableDisplay extends  AbstractDisplay
{
    /**
     * ヘッダを表示
     */
    protected function displayHead()
    {
        echo '<table border="1" cellpadding="2" cellspacing="2">';
    }

    /**
     * ボディを表示
     */
    protected function displayBody()
    {
        foreach ($this->getData() as $key => $value) {
            echo '<tr>';
            echo '<th>'.$key.'</th>';
            echo '<th>'.$value.'</th>';
            echo '</tr>';
        }
    }

    /**
     * フッタを表示
     */
    protected function displayFooter()
    {
        echo '</table>';
    }

}