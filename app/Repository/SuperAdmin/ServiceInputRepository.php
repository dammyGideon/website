<?php
namespace App\Repository\SuperAdmin;

use App\Models\service;
use App\Models\ServicesReg;
use Illuminate\Support\Facades\DB;

class ServiceInputRepository{

    public function model(){
        return ServicesReg::class;
    }
    //
    public static function dataServices(){
        $response= DB::table('services')->get();
        return $response;
    }
    public final static function singleData($id){
        $response=DB::table('services')->where('id',$id)->get();
        return $response;
    }

    public static function storeService($inputData){
        $category=$inputData->input('category');
        $category_id= DB::table('service_categories')->where('category',$category)->value('id');

        $data =[
            'category_id'=>$category_id,
            'short_description'=>$inputData->input('shortDP'),
            'description'=>$inputData->input('longDP')
        ];

        $response=DB::table('services')->insert($data);
        return $response;
    }

    public function update($id){

    }



    //categories.
    public static function serviceCategoryView(){
        $response= DB::table('service_categories')->get();
        return $response;
    }
    public static function categoryViewSingle($id){
        $response= DB::table('service_categories')->where('id',$id)->get();
        return $response;
    }

    public static function serviceCategoryStore($userData){
        $data=$userData->input('category');
        $response=DB::table('service_categories')->insert(['category'=>$data]);
        return $response;
    }
    public static function serviceCategoryUpdate($userData, $id){

    }
    public static function delete_category($id){

    }

}
