<?php


namespace Rizalfirdaus\UnitTest;

class Operation
{

    public static function sum(array $numbers): float
    {
        $result = 0;
        foreach ($numbers as $number) {
            $result += $number;
        }
        return $result;
    }
}

var_dump(Operation::sum([1, 2, 3, 4]));
