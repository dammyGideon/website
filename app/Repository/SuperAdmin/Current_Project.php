<?php

namespace App\Repository\SuperAdmin;


use App\Models\CurrentProject;

class Current_Project {

    public function model(){
        return ModelsCurrentProject::class;
    }

    public function upload($userData){
        if($userData->hasFile('upload')){
            $files = $userData->file('upload');

             $filename = $userData->upload->getClientOriginalName();

            $destinationPath = public_path('/project');
            $files->move($destinationPath, $filename);

            $imagePath=$filename;

                    $data=new CurrentProject;
                    $data->project_image=$imagePath;
                    $data->short_description=$userData->input('shortDP');
                    $data->description=$userData->input('longDP');

                    $data->save();
        }
    }

}
