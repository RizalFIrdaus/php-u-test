<?php

namespace Rizalfirdaus\UnitTest;

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    public function testCounter()
    {
        $counter = new Counter();
        $counter->increment();
        echo $counter->getCounter() . PHP_EOL;
    }
}
