<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
class UserTableSeeder extends Seeder
{

    public function run()
    {
        $faker= Factory::create();

        $uniqure_id="DTG00";
        //

        $user=new User();
        $user->first_name='Augustine';
        $user->last_name ='Bolaji Samson';
        $user->email ='austinebolaji@gmail.com';
        $user->password=Hash::make('password');
        $user->bio=$faker->sentence();
        $user->save();


        DB::table('users')->where('id',$user->id)->update(['client_id'=>$uniqure_id.$user->id]);

        $user2=new User();
        $user2->first_name='Gideon';
        $user2->last_name='damilola';
        $user2->email='ajayegidolas@gmail.com';
        $user2->password=Hash::make('password');
        $user->bio=$faker->sentence();
        $user2->save();

        DB::table('users')->where('id',$user2->id)->update(['client_id'=>$uniqure_id.$user2->id]);

        $user3=new User();
        $user3->first_name='test';
        $user3->last_name='test';
        $user3->email='test@gmail.com';
        $user3->password=Hash::make('password');
        $user->bio=$faker->sentence();
        $user3->save();

        DB::table('users')->where('id',$user3->id)->update(['client_id'=>$uniqure_id.$user3->id]);


        $user->assignRole('SuperAdmin');

        $user2->assignRole('Admin');
        $user3->assignRole('user');
    }
}
