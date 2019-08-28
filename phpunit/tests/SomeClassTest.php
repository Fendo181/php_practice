<?php
namespace Test;
use PHPUnit\Framework\TestCase;
use Chap9;
Use Psy;

class SomeClassTest extends TestCase
{
    public function testDoSomething()
    {
        $stb = $this->createMock(Chap9\SomeClass::class);

        $stb->method('doSomething')->willReturn('Bye!');

        $this->assertEquals('Bye!', $stb->doSomething());
    }
}
