<?php

namespace App\Repository\SuperAdmin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
class RegisterRepository{

    public function model(){
        return User::class;
    }


    public static function AllUser(){
       return  User::role('user')->paginate(20);
    }

    public static function EditUser($user){
        $response= DB::table('users')->where('id',$user)->get();
        return $response;
    }
    public function RegisterUsers($userData){

        $uniqure_id="DTG00";
        if($userData->hasFile('image')){
            $files = $userData->file('image');
            $filename = $userData->image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $files->move($destinationPath, $filename);

            $imagePath=$filename;
            $email_verification= DB::table('users')->where('email',$userData->input('email'))->value('email');
            if($email_verification !=null ){
                return redirect()->back()->with('error','this user Already exist');
            }else{
            $data=new User();
            $data->first_name=$userData->input('first_name');
            $data->last_name=$userData->input('last_name');
            $data->email=$userData->input('email');
            $data->password=Hash::make('password');
            $data->avatar=$imagePath;
            $data->phone=$userData->input('phone');
            $data->save();
            $data->assignRole('user');

            DB::table('users')->where('id',$data->id)->update(['client_id'=>$uniqure_id.$data->id]);
            //Mail::to($userData['email'])->send(new WelcomeMail($data));
            return redirect()->back()->with('success','user created');
            }
            
        }
    }

    public static function UpdateUser($userData,$id){

        $first_name=$userData->input('first_name');
        $last_name =$userData->input('last_name');
        $email =$userData->input('email');
        $phone=$userData->input('phone');

        DB::update('update users set
        first_name= ?,
        last_name = ?,
        email     =?,
        phone    =?
        where id = ?',[$first_name,$last_name,$email,$phone,$id]);

    }

    public static function delete($userData){
        $user=User::find($userData);
        $user->roles()->detach();
        return  DB::delete('delete from users where id = ?',[$userData]);
    }


}

