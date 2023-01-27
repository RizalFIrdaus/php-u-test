<?php

namespace Rizalfirdaus\UnitTest;

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    public function testCounter()
    {
        $counter = new Counter();
        $counter->increment();
        $counter->increment();
        $counter->increment();
        Self::assertEquals(3, $counter->getCounter());
        return $counter;
    }
    /**
     * @depends testCounter
     */
    public function testEqualsCon(Counter $counter)
    {
        $counter->increment();
        Self::assertEquals(4, $counter->getCounter());
    }
}
