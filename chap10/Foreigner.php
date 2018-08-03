<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/01
 * Time: 13:38
 */

require_once 'Person.php';

class Foreigner extends Person
{
    public $middleName;


    public function __construct(string $lastNmae, string $middleName, string $firstName)
    {
        //スーパクラスのコンストラクタをオーバライド
        parent::__construct($lastNmae, $firstName);
        // $miidleNameを初期化する。
        $this->middleName = $middleName;
    }

    public function show()
    {
        print "<p>僕の名前は{$this->firstName} {$this->middleName} {$this->lastName}です!</p>";
    }
}
