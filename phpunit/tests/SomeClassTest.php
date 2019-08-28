<?php
namespace Test;
use PHPUnit\Framework\TestCase;
use Chap9;
Use Psy;

class SomeClassTest extends TestCase
{
    public function testDoSomething()
    {
        $stub = $this->createMock(Chap9\SomeClass::class);

        $map = [
            ['a', 'b', 'c', 'd'],
        ];


        $stub->method('doSomething')->will($this->returnValueMap($map));

        // $stub->doSomething() は、渡した引数に応じて異なる値を返します
        $this->assertEquals('d', $stub->doSomething('a', 'b', 'c'));

    }
}
