<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use Illuminate\Support\Carbon;

class PostSeederTable extends Seeder
{

    public function run()
    {
       // DB::table('blog_posts')->truncate();

        $post =[];

        

        $faker= Factory::create();
        $date= Carbon::yesterday();

        for($i =1; $i <= 10; $i++){

            $image= "Post_image_" . rand(1,5) .".jpg";

            $date->addDays((1));
            $publishedDate = clone($date);

            $cat_id=DB::table('blog_categories')->pluck('id');
            
           

            $post[]=[
                'user_id'=> rand(1,3),
                'title'=>$faker->sentence(rand(8,12)),
                'excerpt'=>$faker->text(rand(250,300)),
                'body'=>$faker->paragraphs(rand(10,15), true),
                'slug'=>$faker->slug(),
               
                'created_at'=>clone($date),
                'updated_at'=>clone($date),
                'published_at'=> $i > 5 ? $publishedDate : ( rand(0,1) == 0 ? Null : $publishedDate->addDays(4))

            ];
        }
        DB::table('blog_posts')->insert($post);
    }
}
