<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
            'grade_id'=>1,
            'topic'=>"Nature"
        ],[
            'grade_id'=>1,
            'topic'=>"Stories"
        ],[
            'grade_id'=>2,
            'topic'=>"Nature"
        ],[
            'grade_id'=>2,
            'topic'=>"Stories"
        ],[
            'grade_id'=>3,
            'topic'=>"Nature"
        ],[
            'grade_id'=>3,
            'topic'=>"Stories"
        ],[
            'grade_id'=>1,
            'topic'=>"Nature"
        ],[
            'grade_id'=>4,
            'topic'=>"Nature"
        ],[
            'grade_id'=>4,
            'topic'=>"Stories"
        ],[
            'grade_id'=>6,
            'topic'=>"General"
        ],[
            'grade_id'=>7,
            'topic'=>"Maths"
        ],[
            'grade_id'=>7,
            'topic'=>"Science"
        ],[
            'grade_id'=>5,
            'topic'=>"History"
        ],[
            'grade_id'=>6,
            'topic'=>"School Subject Comics"
        ],[
            'grade_id'=>6,
            'topic'=>"Value Education"
        ],[
            'grade_id'=>7,
            'topic'=>"Computer"
        ]);
    }
}
