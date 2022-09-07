<?php

namespace App\Repository\SuperAdmin;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
class TeamRepository{

    public function model(){
        return Team::class();
    }

    public static function allTeam(){
        $response=Team::get();
        return $response;

    }
    public static function team_reg($userData){
        if($userData->hasFile('image')){
            $files = $userData->file('image');
            $filename = $userData->image->getClientOriginalName();
            $destinationPath = public_path('/team');
            $files->move($destinationPath, $filename);

            $imagePath=$filename;

                    $data=new Team();
                    $data->name=$userData->input('name');
                    $data->position=$userData->input('position');
                    $data->image=$imagePath;
                    $data->personal_details=$userData->input('personal_details');
                    $data->linkedIn=$userData->input('linkedIn');

                    $data->save();



        }

    }

    public static function UpdateTeamMember($userData,$id){

        $name=$userData->input('name');
        $position =$userData->input('position');
        $linkedIn =$userData->input('linkedIn');
        $phone=$userData->input('phone');

        DB::update('update teams set
        name= ?,
        position = ?,
        linkedIn =?,
        image   =?
        where id = ?',[$name,$position,$linkedIn,$phone,$id]);

    }

    public static function removeMemeber($userData){
        return  DB::delete('delete from teams where id = ?',[$userData]);
    }

}
