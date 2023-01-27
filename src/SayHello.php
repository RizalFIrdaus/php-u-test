<?php

namespace Rizalfirdaus\UnitTest;

class SayHello
{
    public function __construct(private $name)
    {
    }
    public function Hello()
    {
        if ($this->name == "") {
            throw new \Exception("Name is null", 400);
        }
        echo "Hello, " . $this->name . " !";
    }
}
