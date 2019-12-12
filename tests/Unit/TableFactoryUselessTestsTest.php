<?php

namespace Tests\Unit;

use App\UselessTests;
use Tests\TestCase;

class TableFactoryUselessTestsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $useless = factory(UselessTests::class,3)->create();
        $array_id = array();
        foreach ($useless as $entity){
            $array_id[] = $entity->getAttributes()["id"];
        }
        $data_is_table = UselessTests::find($array_id);
        $this->assertEquals(count($useless),count($data_is_table));
    }
}
