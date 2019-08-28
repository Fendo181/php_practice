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

        $stub->method('doSomething')->will($this->returnArgument((0)));

        $this->assertEquals('foo', $stub->doSomething('foo'));

        // $stub->doSomething('bar') は 'bar' を返します
        $this->assertEquals('bar', $stub->doSomething('bar'));
    }
}
