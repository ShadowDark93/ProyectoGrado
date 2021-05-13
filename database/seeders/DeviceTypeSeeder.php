<?php

namespace Database\Seeders;

use App\Models\DeviceType;
use Illuminate\Database\Seeder;

class DeviceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeviceType::Create([
            'description' => 'NODE MCU V3 ESP32-12',
        ]);

        DeviceType::Create([
            'description' => 'WEMOS D1 ESP8266',
        ]);

        DeviceType::Create([
            'description' => 'WEMOS D1 MINI ESP8266',
        ]);

    }
}
