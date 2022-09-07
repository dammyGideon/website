<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\message;
class Messageseeder extends Seeder
{

    public function run()
    {
        //
        $message=array(
            array('mesaage'=>'testing'),
            array('mesaage'=>'testing1'),
            array('mesaage'=>'testing2'),
            array('mesaage'=>'testing4'),
        );
        message::insert($message);
    }
}
