<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Vehicle;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->delete();
        Parking::create([
            'plate' => 'MJS07D',
            'color' => 'rojo',
            'user_id' => User::all()->random()->id,
        ]);

        Parking::create([
            'plate' => 'NAL638',
            'color' => 'azul',
            'user_id' => User::all()->random()->id,
            ]);

        Parking::create([
            'plate' => 'MAS638',
            'color' => 'amarillo',
            'user_id' => User::all()->random()->id,
                ]);
    }
}
