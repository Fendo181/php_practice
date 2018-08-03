<?php
/**
 * Created by PhpStorm.
 * User: endu
 * Date: 2018/07/05
 * Time: 8:40
 */

//型を宣言する

interface IFax
{
    public function send();
}

interface IPrinter
{
    public function print();
}

// 実装を宣言する
trait FaxTrait
{
    public function send()
    {
        print 'sending fax...sended!';
        echo PHP_EOL;
    }
}

trait PrinterTrait
{
    public function print()
    {
        print 'printing completed';
        echo PHP_EOL;
    }
}


// interfaceが型(そのメソッドを実装ないと駄目だよ〜)
// traitが実装(再利用可能な実装をするよ~)

class FaxPrinter implements IFax, IPrinter
{
    use FaxTrait, PrinterTrait;
}


$fp = new FaxPrinter();
$fp->send();
$fp->print();
