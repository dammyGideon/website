<?php

namespace App\Http\Controllers\Dashboard\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\SuperAdmin\ServiceInputRepository;
use Exception;
use Illuminate\Support\Facades\DB;

class Service_categoryController extends Controller
{
    //
    public function index(){
        $response=ServiceInputRepository::serviceCategoryView();
        return view('dashboard.super_admin.service_category',['response'=>$response]);
    }

    public function show($id){
        
    }

    public function store(Request $request){
        try {
            ServiceInputRepository::serviceCategoryStore($request);
            return redirect()->back()->with('success','service category upload is successful');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function remove_category($id){
        DB::table('service_categories')->where('id',$id)->delete();
        return redirect()->back()->with('success','category remove was successful');
    }

}
