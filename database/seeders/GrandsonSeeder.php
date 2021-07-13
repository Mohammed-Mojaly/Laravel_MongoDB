<?php

namespace Database\Seeders;

use App\Models\Grandson;
use App\Models\Son;
use Illuminate\Database\Seeder;

class GrandsonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ali_mohammed = Son::where('name' , 'Ali')->first()->id;

        // 4
        Grandson::create([
            'son_id'          => $ali_mohammed,
            'name'             => 'Sameer',
            'birth_date'       => '2000-04-04',
        ]);
        Grandson::create([
            'son_id'          => $ali_mohammed,
            'name'             => 'Ameer',
            'birth_date'       => '2002-04-04',
        ]);
        Grandson::create([
            'son_id'          => $ali_mohammed,
            'name'             => 'Omar',
            'birth_date'       => '2003-04-04',
        ]);
        Grandson::create([
            'son_id'          => $ali_mohammed,
            'name'             => 'Osama',
            'birth_date'       => '2004-04-04',
        ]);


        $said_mohammed = Son::where('name' , 'Said')->first()->id;

        // 3

        Grandson::create([
            'son_id'          => $said_mohammed,
            'name'             => 'Islam',
            'birth_date'       => '2005-04-04',
        ]);
        Grandson::create([
            'son_id'          => $said_mohammed,
            'name'             => 'Hassan',
            'birth_date'       => '2006-04-04',
        ]);
        Grandson::create([
            'son_id'          => $said_mohammed,
            'name'             => 'Amr',
            'birth_date'       => '2006-04-04',
        ]);


        $saleem_ahmed = Son::where('name' , 'Saleem')->first()->id;

        // 3

        Grandson::create([
            'son_id'          => $saleem_ahmed,
            'name'             => 'Maher',
            'birth_date'       => '2005-04-04',
        ]);
        Grandson::create([
            'son_id'          => $saleem_ahmed,
            'name'             => 'Hosaam',
            'birth_date'       => '2007-04-04',
        ]);
        Grandson::create([
            'son_id'          => $saleem_ahmed,
            'name'             => 'Hamza',
            'birth_date'       => '2008-04-04',
        ]);


        $masood_ahmed = Son::where('name' , 'Masood')->first()->id;

         // 3

         Grandson::create([
            'son_id'          => $masood_ahmed,
            'name'             => 'Mostafa',
            'birth_date'       => '2009-05-04',
        ]);
        Grandson::create([
            'son_id'          => $masood_ahmed,
            'name'             => 'Wasem',
            'birth_date'       => '2010-07-04',
        ]);
        Grandson::create([
            'son_id'          => $masood_ahmed,
            'name'             => 'Yousef',
            'birth_date'       => '2011-09-04',
        ]);



    }
}
