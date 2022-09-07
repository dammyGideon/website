<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\ServiceDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class servicesController extends Controller
{
    //Service route


    public function services(){
        return view('pages.services.services');
    }
    public function datacollection(){
        return view ('/pages/services/datacollection');
    }
    public function data_analysis(){
        return view ('/pages/services/data_analysis');
    }
    public function business_analytics(){
        return view('/pages/services/business-analytics');
    }
    public function report_writing(){
        return view('/pages/services/report_writing');
    }
    public function data_outsourcing(){
        return view('/pages/services/data-outsourcing');
    }
    public function training(){
        return view('/pages/services/training');
    }
    public function research_consultation(){
        return view('/pages/services/research_consultation');
    }
    public function market_survey(){
        return view('pages.services.market_survey');
    }

    public function dashboard_service(){
        return view('/dashboard_service');
    }


    public function service_details(Request $request){


        // $validator = Validator::make($request->all(), [
        //     'file'=> 'mimes:doc,pdf,docx,zip'
        // ]);

        if($request->hasFile('file')){
            $files = $request->file('file');
            $filename = $request->file->getClientOriginalName();
            $destinationPath = public_path('/service/details');
            $files->move($destinationPath, $filename);

            $imagePath=$filename;
            $service_details = new ServiceDetails();
            $service_details->upload=$imagePath;
            $service_details->full_name=$request->input('full_name');
            $service_details->service=$request->input('service');

             $service_details->save();

             return redirect()->back()->with('success','Details successful saved');
        }
    }
}
