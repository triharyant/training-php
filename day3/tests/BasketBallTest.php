<?php

namespace Tests;

use App\BasketBall;
use PHPUnit\Framework\TestCase;

class BasketBallTest extends TestCase
{
    private $games;

    public function setUp(): void
    {
        parent::setUp();

        $this->games = new BasketBall('Team A', 'Team B');
    }

    public function test_home_name()
    {
        $actual = $this->games->homeName();

        $this->assertEquals('Team A', $actual);
    }

    public function test_away_name()
    {
        $actual = $this->games->awayName();

        $this->assertEquals('Team B', $actual);
    }

    public function test_one_point()
    {
        $this->games->homeOnePoint();
        $actualA = $this->games->homeScore();

        $this->games->awayOnePoint();
        $actualB = $this->games->awayScore();

        $this->assertEquals(1, $actualA);
        $this->assertEquals(1, $actualB);
    }

    public function test_two_points()
    {
        $this->games->homeTwoPoints();
        $actualA = $this->games->homeScore();

        $this->games->awayTwoPoints();
        $actualB = $this->games->awayScore();

        $this->assertEquals(2, $actualA);
        $this->assertEquals(2, $actualB);
    }

    public function test_three_points()
    {
        $this->games->homeThreePoints();
        $actualA = $this->games->homeScore();

        $this->games->awayThreePoints();
        $actualB = $this->games->awayScore();

        $this->assertEquals(3, $actualA);
        $this->assertEquals(3, $actualB);
    }

    public function test_home_accumulation_scores()
    {
        $this->games->homeOnePoint();
        $this->games->homeOnePoint();
        $this->games->homeTwoPoints();
        $this->games->homeThreePoints();

        $actual = $this->games->homeScore();

        $this->assertEquals(7, $actual);
    }

    public function test_away_accumulation_scores()
    {
        $this->games->awayThreePoints();
        $this->games->awayOnePoint();
        $this->games->awayTwoPoints();
        $this->games->awayOnePoint();
        $this->games->awayTwoPoints();

        $actual = $this->games->awayScore();

        $this->assertEquals(9, $actual);
    }
}
