<?php

namespace Tests;

use App\Numerica;
use PHPUnit\Framework\TestCase;

class NumericaTest extends TestCase
{
    public $numerica;

    public function setUp(): void
    {
        parent::setUp();

        $this->numerica = new Numerica([3, 4, 9, 6, 8, 7, 5, 1, 10, 2]);
    }

    public function test_first()
    {
        $actual = $this->numerica->first();

        $this->assertEquals(3, $actual);
    }

    public function test_last()
    {
        $actual = $this->numerica->last();

        $this->assertEquals(2, $actual);
    }

    public function test_min()
    {
        $actual = $this->numerica->min();

        $this->assertEquals(1, $actual);
    }

    public function test_max()
    {
        $actual = $this->numerica->max();

        $this->assertEquals(10, $actual);
    }

    public function test_sum()
    {
        $actual = $this->numerica->sum();

        $this->assertEquals(55, $actual);
    }

    public function test_rsort()
    {
        $actual = $this->numerica->rsort();

        $this->assertEquals([10, 9, 8, 7, 6, 5, 4, 3, 2, 1], $actual);
    }

    public function test_sort()
    {
        $actual = $this->numerica->sort();

        $this->assertEquals([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], $actual);
    }

    public function test_odd()
    {
        $actual = $this->numerica->odd();

        $this->assertEqualsCanonicalizing([1, 3, 5, 7, 9], $actual);
    }

    public function test_even()
    {
        $actual = $this->numerica->even();

        $this->assertEqualsCanonicalizing([2, 4, 6, 8, 10], $actual);
    }

    public function test_greater_than()
    {
        $actual = $this->numerica->greaterThan(5);

        $this->assertEqualsCanonicalizing([6, 7, 8, 9, 10], $actual);
    }

    public function test_greater_than_equal()
    {
        $actual = $this->numerica->greaterThanEqual(5);

        $this->assertEqualsCanonicalizing([5, 6, 7, 8, 9, 10], $actual);
    }

    public function test_less_than()
    {
        $actual = $this->numerica->lessThan(5);

        $this->assertEqualsCanonicalizing([1, 2, 3, 4], $actual);
    }

    public function test_less_than_equal()
    {
        $actual = $this->numerica->lessThanEqual(5);

        $this->assertEqualsCanonicalizing([1, 2, 3, 4, 5], $actual);
    }

    public function primes()
    {
        $actual = $this->numerica->primes();

        $this->assertEquals([2, 3, 5, 7], $actual);
    }
}
