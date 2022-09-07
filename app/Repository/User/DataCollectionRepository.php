<?php
namespace App\Repository\User;

use App\Models\DataCollection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use Carbon\Carbon;
class DataCollectionRepository{



    public function model(){
        return DataCollection::class;
    }

    public function Data_Collection($dataInput)
    {  
        // authenticated users


        
        
        $userId=Auth::user()->id;

        // service category
        $category_id = DB::table('service_categories')
        ->where('category',$dataInput->category)
        ->value('id');


        
        $year = Carbon::now()->format('y'); 
        $month = Carbon::now()->format('m'); // 07
        
    
        $today = Carbon::now();
        $now = Carbon::now()->format('d');

        $first=$today->firstOfMonth()->format('d');

        $recent_id =DB::table('counter')->latest()->first();
        $cast=intval($recent_id->id);
        
        // if the counter is less 

        

           // DB::table('counter')->delete();

            if($cast <= 9){
                $result="DG".$year.$month.'0'.$recent_id->id;
                
                    if($dataInput->hasFile('file')){
                        $files = $dataInput->file('file');
                        $filename = $dataInput->file->getClientOriginalName();
                        $destinationPath = public_path('project');
                        $files->move($destinationPath, $filename);
            
                        $imagePath=$filename;
            
                        $data=DB::table('service_details')->insert([
                            'user_id'=>$userId,
                            'upload'=>$imagePath,
                            'project_id'=>$result,
                            'project_title'=>$dataInput->project_title,
                            'service_details'=>$dataInput->service,
                            'category_id'=>$category_id
                        ]);

                        
            
                        DB::table('counter')->insert(['count_project'=>$cast]);
                        return $data;
                    }
                }else{
                    $result="DG".$year.$month.$recent_id->id;
                   
                    if($dataInput->hasFile('file')){
                        $files = $dataInput->file('file');
                        $filename = $dataInput->file->getClientOriginalName();
                        $destinationPath = public_path('project');
                        $files->move($destinationPath, $filename);
            
                        $imagePath=$filename;
            
                        $data=DB::table('service_details')->insert([
                            'user_id'=>$userId,
                            'upload'=>$imagePath,
                            'project_id'=>$result,
                            'project_title'=>$dataInput->project_title,
                            'service_details'=>$dataInput->service,
                            'category_id'=>$category_id
                        ]);
            
                        DB::table('counter')->insert(['count_project'=>$cast]);
                        return $data;
                }
               
            
        }
        


        
    }
}
