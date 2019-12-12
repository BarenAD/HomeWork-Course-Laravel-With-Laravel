<?php

namespace Tests\Unit;

use App\Facades\BasicServiceFacade;
use Tests\TestCase;

class BasicServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        BasicServiceFacade::shouldReceive('getForMock')->once()->andReturn('my third test');
        $result = BasicServiceFacade::getForMock('123');
        $this->assertEquals($result, 'my third test');
    }
}
