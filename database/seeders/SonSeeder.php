<?php

namespace Database\Seeders;

use App\Models\Son;
use App\Models\User;
use Illuminate\Database\Seeder;

class SonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mohammed = User::where('name' , 'Mohammed')->first()->id;
        Son::create([
            'user_id'          => $mohammed,
            'name'             => 'Ali',
            'birth_date'       => '1960-02-02',
        ]);

        Son::create([
            'user_id'          => $mohammed,
            'name'             => 'Said',
            'birth_date'       => '1966-02-02',
        ]);

        $ahmed    = User::where('name' , 'Ahmed')->first()->id;
        Son::create([
            'user_id'          => $ahmed,
            'name'             => 'Saleem',
            'birth_date'       => '1990-03-03',
        ]);

        Son::create([
            'user_id'          => $ahmed,
            'name'             => 'Masood',
            'birth_date'       => '1995-03-03',
        ]);
    }
}
