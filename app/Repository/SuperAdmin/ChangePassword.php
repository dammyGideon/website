<?php
namespace App\Repository\SuperAdmin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class ChangePassword{

    public function model(){
        return User::class;
    }

    public function password($userData){
        $id=Auth::user()->id;
        $new_password=$userData->input('password');
        $confirm_password=$userData->input('confirm_password');

        if($new_password == $confirm_password){
            $pasword_rest=Hash::make($new_password);
            $response=DB::table('users')->where('id',$id)->update(['password'=>$pasword_rest]);
            return $response;
        }else{
            return view('error','password did not match');
        }


    }
}
