<?php
namespace App\Repository\User;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileRepository{

    public function model(){
        return User::class;
    }


    public function updateUsersProfile($request){
        $id=auth()->user()->id;

        $profile=User::where('id',$id)->update([
           'first_name'=>$request->first_name,
           'last_name'=>$request->last_name,
           'email'=>$request->email,
           'phone'=>$request->phone,
       ]);
       return $profile;
    }

    public function ProfileImage($request){

        $id=$request->user()->id;
       
        if ($request->hasFile('avater')) {
            $files = $request->file('avater');
            $filename = $request->avater->getClientOriginalName();
            $destinationPath = public_path('assets/img/');
            $files->move($destinationPath, $filename);
            $imagePath=$filename;

            $user= User::find($id);
            $user->avatar= $imagePath;
            $user->save();


         }
    }
}
