<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=array(
            array("username"=>"Gideon","position"=>"Cto","summary"=>"Lorem ipsum represents a
             long-held tradition for designers, typographers and the like.
             bacon lovers to Charlie Sheen fans.")
        );

        Team::insert($user);
    }
}
