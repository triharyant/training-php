<?php

namespace Tests;

use App\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function test_hello()
    {
        $actual = (new Hello())->say();
        $this->assertEquals('Hello World!', $actual);
    }

}
