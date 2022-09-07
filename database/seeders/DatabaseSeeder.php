<?php

namespace Database\Seeders;

use App\Models\Permissions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            roleBaseSeeder::class,
            UserTableSeeder::class,
            ServiceTableSeeder::class,
            PostSeederTable::class,
            categoriesTableSeeder::class,
            CounterTableSeeder::class
        ]);
    }
}
