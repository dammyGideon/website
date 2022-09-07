<?php

namespace App\Http\Controllers\Dashboard\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Data_CollectionRequest;
use App\Repository\User\DataCollectionRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class DataCollectionsController extends Controller
{
    //

    public function index(){
        $auth=Auth::user()->id;
        $category_id=DB::table('service_categories')
        ->where('category','Data collection')
        ->value('id');
        $service_details=DB::table('service_details')
        ->where('user_id',$auth)
        ->where('category_id',$category_id)
        ->get();
        return view('dashboard.users.services.data_collection',['service_details'=>$service_details]);
    }

    public function data_analysis(){
        $auth=Auth::user()->id;
        $category_id=DB::table('service_categories')
        ->where('category','Data Analytics')
        ->value('id');
        $service_details=DB::table('service_details')
        ->where('user_id',$auth)
        ->where('category_id',$category_id)
        ->get();
        return view('dashboard.users.services.data_analysis',['service_details'=>$service_details]);
    }

    public function businessAnalytics(){
        $auth=Auth::user()->id;
        $category_id=DB::table('service_categories')
        ->where('category','Business Analytics')
        ->value('id');
        $service_details=DB::table('service_details')
        ->where('user_id',$auth)
        ->where('category_id',$category_id)
        ->get();
        
     return view('dashboard.users.services.business_analytics',['service_details'=>$service_details]);
    }


    public function reportWriting(){
        $auth=Auth::user()->id;
        $category_id=DB::table('service_categories')
        ->where('category','Report Writing')
        ->value('id');
        $service_details=DB::table('service_details')
        ->where('user_id',$auth)
        ->where('category_id',$category_id)
        ->get();
        return view('dashboard.users.services.report_writing',['service_details'=>$service_details]);
    }

    public function training(){
        $auth=Auth::user()->id;
        $category_id=DB::table('service_categories')
        ->where('category','Training')
        ->value('id');
        $service_details=DB::table('service_details')
        ->where('user_id',$auth)
        ->where('category_id',$category_id)
        ->get();

        return view('dashboard.users.services.training',['service_details'=>$service_details]);
    }

    public function consultation(){
        $auth=Auth::user()->id;
        $category_id=DB::table('service_categories')
        ->where('category','Consultation')
        ->value('id');
        $service_details=DB::table('service_details')
        ->where('user_id',$auth)
        ->where('category_id',$category_id)
        ->get();

        return view('dashboard.users.services.consultation',['service_details'=>$service_details]);
    }

    public function fieldSurvey(){
        $auth=Auth::user()->id;
        $category_id=DB::table('service_categories')
        ->where('category','Market/Field Survey')
        ->value('id');
        $service_details=DB::table('service_details')
        ->where('user_id',$auth)
        ->where('category_id',$category_id)
        ->get();
        return view('dashboard.users.services.field_survey',['service_details'=>$service_details]);
    }
    public function dataOutsourcing(){
        $auth=Auth::user()->id;
        $category_id=DB::table('service_categories')
        ->where('category','Data Outsourcing')
        ->value('id');
        $service_details=DB::table('service_details')
        ->where('user_id',$auth)
        ->where('category_id',$category_id)
        ->get();

        return view('dashboard.users.services.data_outgoing',['service_details'=>$service_details]);
    }

    public function store(Request $request,DataCollectionRepository $dataCollectionRepository){
        $dataCollectionRepository->Data_Collection($request);
        return redirect()->back()->with('message','Project creation was successful');
    }

    public function deleteProduct($id){
        $auth= Auth::user()->id;
        DB::table('service_details')
        ->where('id',$id)
        ->where('user_id',$auth)
        ->delete();
        return redirect()->back()->with('message','Project was successful delete');
    }
    




}
