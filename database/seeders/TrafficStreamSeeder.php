<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TrafficStreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('traffic_streams')->insert([
            'traffic_ACD' => random_int(1, 5),
            'traffic_ASR' => random_int(10,70),
            'traffic_total_minutes' => random_int(100,700),
            'traffic_name' => 'test_traffic',
            'traffic_user' => 'admin',
            'traffic_type' => 'test',
            'traffic_destination' => 'Denemark',
            'traffic_originator' => 'Originator',
            'traffic_terminator' => 'Terminator',
            'traffic_start_time' => Carbon::today()->subDays(rand(0, 365)),
            'traffic_end_time' => Carbon::today()->subDays(rand(0, 365)),
            'traffic_status' => true,
            'traffic_isPaused' => false,
            'traffic_isComplete' => false,
        ]);
    }
}
