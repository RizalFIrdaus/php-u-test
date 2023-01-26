<?php

namespace Rizalfirdaus\UnitTest;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class CounterTest extends TestCase
{
    public function testCounter()
    {
        $counter = new Counter();
        $counter->increment();
        $counter->increment();
        $counter->increment();
        Assert::assertEquals(3, $counter->getCounter());
    }
}
