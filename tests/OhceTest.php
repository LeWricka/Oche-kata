<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Ohce;
use Mockery;
use PHPUnit\Framework\TestCase;

final class OhceTest extends TestCase
{
    private Ohce $ohce;

    protected function setUp(): void
    {
        parent::setUp();
        $this->ohce = Mockery::mock(Ohce::class);
    }

    /**
     * @test
     */
    public function GoodNightGreeting()
    {
        $this->ohce->allows()->whatTimeIsIt()->andReturn(21);
        $name = "Pedro";

        $ohce_result = $this->ohce->ohce("ohce ".$name);

        $this->assertEquals("¡Buenas noches ".$name."!", $ohce_result);
    }

    /**
     * @test
     */
    public function GoodEveningGreeting()
    {
        $this->ohce->allows()->whatTimeIsIt()->andReturn(16);
        $name = "Pedro";

        $ohce_result = $this->ohce->ohce("ohce ".$name);

        $this->assertEquals("¡Buenas tardes ".$name."!", $ohce_result);
    }

    /**
     * @test
     */
    public function GoodMorningGreeting()
    {
        $this->ohce->allows()->whatTimeIsIt()->andReturn(8);
        $name = "Pedro";

        $ohce_result = $this->ohce->ohce("ohce ".$name);

        $this->assertEquals("¡Buenos días ".$name."!", $ohce_result);
    }
}
