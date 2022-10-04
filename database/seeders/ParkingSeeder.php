<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Parking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParkingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parking::create([
        'parking_lot' => '1',
        'availability' => true,
        'time_admission' => Carbon::now()->format('Y-m-d H:i:s'),
        'time_departure' => Carbon::now()->format('Y-m-d H:i:s'),
        'user_id' => User::all()->random()->id,
        ]);
    }
}
