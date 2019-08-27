<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Chap9;
Use Psy;

class SomeClassTest extends TestCase
{
    public function testDoSomething()
    {
        $stb = new Chap9\SomeClass();
        eval(Psy\sh());
        $this->assertTrue(true);
    }



}
