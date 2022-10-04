<?php

namespace Database\Seeders;

use Carbon\Carbon;
//use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Vehicle;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehicle::create([
            'plate' => 'HOG789',
            'color' => 'rojo',
            'user_id' => User::all()->random()->id,
        ]);
    }
}
