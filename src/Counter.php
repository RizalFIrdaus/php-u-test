<?php


namespace Rizalfirdaus\UnitTest;


trait data
{
    private int $counter = 0;
}

class Counter
{
    use data;

    public function increment(): void
    {
        $this->counter++;
    }
    public function getCounter(): int
    {
        return $this->counter;
    }
}
