<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'grade'=>"LKG"
        ],[
            'grade'=>"UKG"
        ],[
            'grade'=>"1st Standard"
        ],[
            'grade'=>"2nd Standard"
        ],[
            'grade'=>"3rd Standard"
        ],[
            'grade'=>"4th Standard"
        ],[
            'grade'=>"5th Standard"
        ],[
            'grade'=>"6th Standard"
        ],[
            'grade'=>"7th Standard"
        ],[
            'grade'=>"8th Standard"
        ]);
    }
}
