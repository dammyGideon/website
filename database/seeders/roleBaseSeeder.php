<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class roleBaseSeeder extends Seeder
{
    
    public function run()
    {
        //
        
        //$permission = Permission::create(['name' => 'edit articles']);
        $role=new Role();
        $role->name = "SuperAdmin";
      
        $role->save();

        $role2= new Role();
        $role2->name="Admin";
        $role2->save();

        $role3= new Role();
        $role3->name="user";
        $role3->save();



        

    }
}
