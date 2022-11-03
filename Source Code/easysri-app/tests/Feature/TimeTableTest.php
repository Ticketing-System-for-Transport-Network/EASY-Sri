<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TimeTableTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function time_table_store()
    {
        $response = $this->call('POST', '/bustimeinsert/store', [
            'route_id' => 'C001',
            'dep' => 'Ratnapura',
            'dep_time' => '13:PM',
            'arr' => 'Colombo',
            'arr_time' => '13:PM',
            'dis' => 100,
            'dis_time' => 100,
            'bus_t' => 'CTB',
            'ser_t' => 'Normal Service (Normal Fare)',
            'no_bus' => 20,
            'charge' => 100,
            'done' => 0,
        ]);

        $this->assertTrue(true);
    }
}
