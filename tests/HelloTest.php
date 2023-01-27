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
    // public function tearDown(): void
    // {
    //     // Self::markTestSkipped("Test Hallo skipped");
    //     echo "Teardown" . PHP_EOL;
    // }


    /**
     * @requires PHP <= 7.2
     * @requires OS Linux
     */
    public function testHello()
    {
        $this->object->Hello();
        Self::assertClassHasAttribute("name", sayHello::class);
    }

    /**
     * @requires PHP <= 7.2
     * @requires OS Linux
     */
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
