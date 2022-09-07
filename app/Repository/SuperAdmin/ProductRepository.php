<?php

namespace App\Repository\SuperAdmin;
use App\Models\Project_Database;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class ProductRepository{

    public function model(){
        return User::class;
    }

    public function Data_Collection($dataInput)
    {
        $userId=$dataInput->id;

        $category_id = DB::table('service_categories')
        ->where('category',$dataInput->category)
        ->value('id');

        if($dataInput->hasFile('file')){
            $files = $dataInput->file('file');
            $filename = $dataInput->file->getClientOriginalName();
            $destinationPath = public_path('project');
            $files->move($destinationPath, $filename);

            $imagePath=$filename;

            $data=DB::table('service_details')->insert([
                'user_id'=>$userId,
                'upload'=>$imagePath,
                'service_details'=>$dataInput->service,
                'category_id'=>$category_id 
            ]);

            return $data;
        }

        
    }
}