<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/20
 * Time: 8:31
 */

class MyMail {
    //to 宛先、 subject 件名、message (本文)、プロパティを定義
    public $to;
    public $subject;
    public $message;
    // ぞの他のヘッダ情報を格納するためのプライベート変数 (連想配列)
    private $headers = [];

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->headers[$name] = $value;
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->headers[$name];
    }

    public function send() {
        // $headersの内容を基にヘッダ情報(改行区切り)を生成

        $others= "";

        foreach ($this->headers as $key => $value ){
            // プロパティに含まれる 「__」は「ーー」に変換する
            $key = str_replace('_', '-', $key);
            $others .= "{$key}:{$value}";
        }

        echo "メールを送信しました！";

        mb_send_mail($this->to,$this->subject,$this->message,$others);
    }

}