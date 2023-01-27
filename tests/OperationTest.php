<?php

namespace Rizalfirdaus\UnitTest;

use PHPUnit\Framework\TestCase;

class OperationTest extends TestCase
{

    /**
     * @testWith [21.5,[1,2,3,4,5.5,6]]
     */
    public function testSum(float $expected, array $values)
    {
        $sum = Operation::sum($values);
        Self::assertIsFloat($sum);
        Self::assertEquals($expected, $sum);
    }
}
