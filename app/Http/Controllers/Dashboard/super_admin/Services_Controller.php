<?php

namespace App\Http\Controllers\Dashboard\super_admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuperAdmin\StoreServiceRequest;
use App\Repository\SuperAdmin\ServiceInputRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Services_Controller extends Controller
{
    //
    public function index(){
        $response= ServiceInputRepository::dataServices();
        return view('dashboard.super_admin.services',['response'=>$response]);
    }
    public function show($id){
        $response=ServiceInputRepository::singleData($id);
        return view(
            'dashboard.super_admin.data_collection_input_update'
            ,['response'=>$response]
        );
    }

    public function store(StoreServiceRequest $request){
        try {
            ServiceInputRepository::storeService($request);
            return redirect()->back()->with('success','Service uploaded');
        } catch (Exception $e) {
           return  $e->getMessage();
        }
    }



    public function update(Request $request, $id)
    {


    }

    public function destroy(){

    }
}
