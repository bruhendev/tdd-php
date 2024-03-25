<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_example()
    {
        Mockery::mock(stdClass::class)->shouldNotReceive('teste')->andReturn(true);
        $this->assertTrue(true);
    }
}