<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CounterTableSeeder extends Seeder
{
   
    public function run()
    {
        DB::table('counter')->insert(['count_project'=>1]);
    }
}
