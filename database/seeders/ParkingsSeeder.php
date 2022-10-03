<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Parking;

class ParkingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parkings')->delete();
        Parking::create([
        'parking_lot' => 'Parqueadero la 22',
        'availability' => si,
        'time_admission' => '12:00 pm',
        'time_departure' => '7:00 pm',
         'user_id' => User::all()->random()->id,
        ]);

        Parking::create([
            'parking_lot' => 'Parqueadero valentina',
            'availability' => no,
            'time_admission' => '4:00 pm',
            'time_departure' => '6:00 pm',
             'user_id' => User::all()->random()->id,
            ]);

        Parking::create([
            'parking_lot' => 'Parqueadero bella vista',
            'availability' => no,
            'time_admission' => '8:00 pm',
            'time_departure' => '10:00 pm',
             'user_id' => User::all()->random()->id,
            ]);
    }
}
