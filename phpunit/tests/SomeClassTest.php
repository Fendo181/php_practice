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

        $stub->method('doSomething')->will($this->returnSelf());

        $this->assertSame($stub, $stub->doSomething());

    }
}
