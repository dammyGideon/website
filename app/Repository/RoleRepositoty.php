<?php

namespace APP\Repository;

use App\Models\Role;
use Illuminate\Support\Facades\DB;
class RoleRepository{


    public function model(){
        return Role::class;
    }

    public function store($data){
        $role= new Role();
        $role->slug=$data->input('slug');
        $role->name=$data->input('name');
        $role->save();

        if($permissions =$data->input('permissions')){
            foreach($permissions as $permission_id){
                DB::table('');
            }
        }
        return $role;
    }



}
