<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Realtor;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Realtor::factory(10)->create();



    $armando = User::find(1);

        $armando->name = "Armando Paulo";
        $armando->email = "armandopaulo@netware.co.mz";
        $armando->password = Hash::make(12345678);
        $armando->save();

    }
}
