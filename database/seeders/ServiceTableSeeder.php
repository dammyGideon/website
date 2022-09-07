<?php

namespace Database\Seeders;

Use App\Models\DataCollectionInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{

    public function run()
    {

        $service=array(
            array("title"=>'Data Collection',
            'details'=>'
            We understand the language of
            data and how best it can be told.
            We take your data through a complete
            process without leaving a step behind to
            achieve your research objectives. From wrangling
            to mining, to the creation of beautiful visualization
            and running of inferential analysis to derive meaningful
             insights and even far more complex statistical analytics, for whatever
            you need to make of your data you can count on us.
            (Quantitative and qualitative analyses).
            '),


        );
        DataCollectionInfo::insert($service);
    }
}
