<?php

namespace TestNamespace;

use PHPUnit\Framework\TestCase;

class TestCaseClass extends TestCase
{

    public function testGreetings()
    {
        $greetings = 'Hello World';
        $this->assertEquals('Hello World', $greetings);
    }
}
