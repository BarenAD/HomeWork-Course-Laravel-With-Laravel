<?php

namespace Tests\Unit;

use App\Services\BasicService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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
        $this->mock(BasicService::class, function ($mock) {
            $mock->shouldReceive('getForMock')->once()->andReturn('my third test');
            $result = $mock->getForMock('234');
            $this->assertEquals($result, 'my third test');
        });
    }
}
