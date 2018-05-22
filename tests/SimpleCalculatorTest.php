<?php

namespace Test\Tests;

use PHPUnit\Framework\TestCase;
use Test\SimpleCalculator;

class SimpleCalculatorTest extends TestCase
{
    public function testClassExists()
    {
        $this->assertTrue(
            class_exists(SimpleCalculator::class),
            'Could not find required class: Test\SimpleCalculator'
        );
        $var = new SimpleCalculator();
        $this->assertInstanceOf(SimpleCalculator::class, $var);
    }

    public function testBalance()
    {
        $var = new SimpleCalculator();
        $this->assertEquals(
            $var->total(),
            0,
            'SimpleCalculator should have a default balance of 0'
        );
    }

    public function testAdds()
    {
        $var = new SimpleCalculator();
        $this->assertEquals($var->total(), 0);
        $var->add(10);
        $this->assertEquals($var->total(), 10);
        $var->add(105);
        $this->assertEquals($var->total(), 115);
    }

    public function testSubtracts()
    {
        $var = new SimpleCalculator();
        $this->assertEquals($var->total(), 0);
        $var->sub(10);
        $this->assertEquals($var->total(), -10);
        $var->sub(105);
        $this->assertEquals($var->total(), -115);
    }

    public function testFactory()
    {
        $var = new SimpleCalculator();
        $this->assertTrue(
            method_exists($var, 'factory'),
            'Expected a static factory() method'
        );
        $var = SimpleCalculator::factory();
        $this->assertInstanceOf(SimpleCalculator::class, $var);
    }
}
