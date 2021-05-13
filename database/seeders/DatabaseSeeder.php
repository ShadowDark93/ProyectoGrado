<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTypeSeeder::class);

        User::create([
            'userTypes_id' => '1',
            'name' => 'David Alberto Ortega Cadena',
            'email' => 'davidortegacadena@gmail.com',
            'password' => bcrypt('David312483'),
        ]);

        User::create([
            'userTypes_id' => '1',
            'name' => 'Marly Viviana Vargas Lozada',
            'email' => 'marly.vargasl@campusucc.edu.co',
            'password' => bcrypt('Lamarly123.'),
        ]);

        User::create([
            'userTypes_id' => '1',
            'name' => 'Julian Andres Orjuela Cataño',
            'email' => 'julian.orjuelac@campusucc.edu.co',
            'password' => bcrypt('Juli123.'),
        ]);

        $this->call(DeviceTypeSeeder::class);

    }
}
