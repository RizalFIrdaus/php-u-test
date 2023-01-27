<?php

namespace Rizalfirdaus\UnitTest;

use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $say = new SayHello("Rizal");
        $say->Hello();
        Self::assertClassHasAttribute("name", sayHello::class);
    }

    public function testException()
    {
        $say = new SayHello("");
        $this->expectException(\Exception::class);
        $say->Hello();
    }
}
