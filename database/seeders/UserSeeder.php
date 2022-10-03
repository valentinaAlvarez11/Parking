<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $u=new User();
        $u->name="Isabella Grajales Lopez";
        $u->email="isabella.grajalesl@autonoma.edu.co";
        $u->password=Hash::make('Isabella118003');


        $u=new User();
        $u->name="Valentina alvarez isaza";
        $u->email="valentina.alvarezi@autonoma.edu.co";
        $u->password=Hash::make('valentina4321');


        $u=new User();
        $u->name="Sofia Piñiela Mejia";
        $u->email="sofia.pinuelam@autonoma.edu.co";
        $u->password=Hash::make('sof4321a');

    }
}
