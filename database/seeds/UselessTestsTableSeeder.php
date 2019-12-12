<?php

use Illuminate\Database\Seeder;
use App\UselessTests;

class UselessTestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UselessTests::class, 10)->create();
    }
}
