<?php

namespace Rizalfirdaus\UnitTest;

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{

    static private Counter $counter;

    static function setUpBeforeClass(): void
    {
        Self::$counter = new Counter();
    }

    public function testCounter()
    {
        Self::$counter->increment();
        Self::$counter->increment();
        Self::$counter->increment();
        Self::assertEquals(3, Self::$counter->getCounter());
        return Self::$counter;
    }
    /**
     * @depends testCounter
     */
    public function testEqualsCon(Counter $counter)
    {
        $counter->increment();
        Self::assertEquals(4, $counter->getCounter());
        Self::markTestIncomplete("Do more");
    }
}
