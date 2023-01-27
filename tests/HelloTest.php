<?php

namespace Rizalfirdaus\UnitTest;

use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{

    private SayHello $object;
    public function setUp(): void
    {
        $this->object = new SayHello("Rizal");
    }
    public function tearDown(): void
    {
        echo "Teardown" . PHP_EOL;
    }


    public function testHello()
    {
        $this->object->Hello();
        Self::assertClassHasAttribute("name", sayHello::class);
    }

    public function testException()
    {
        $say = new SayHello("");
        $this->expectException(\Exception::class);
        $say->Hello();
    }
    public function testExpectOutput()
    {
        $this->object->Hello();
        $this->expectOutputString("Hello, Rizal !");
    }
}
