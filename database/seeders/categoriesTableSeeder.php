<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriesTableSeeder extends Seeder
{
  
    public function run()
    {
        ///DB::table('blog_categories')->truncate();


        DB::table('blog_categories')->insert([
           [
            'blog_category'=>'web design',
            'slug'=> 'web-design'
           ],
           [
            'blog_category'=>'web programming',
            'slug'=> 'web-programming'
           ],
           [
            'blog_category'=>'internet',
            'slug'=> 'internet'
           ],
           [
            'blog_category'=>'Social Marketing',
            'slug'=> 'social-marketing'
           ],
           [
            'blog_category'=>'Photography',
            'slug'=> 'photography'
           ]

        ]);

       


    }
}
