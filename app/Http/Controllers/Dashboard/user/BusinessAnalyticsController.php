<?php

namespace App\Http\Controllers\Dashboard\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\Data_CollectionRequest;
use App\Repository\User\DataCollectionRepository;

class BusinessAnalyticsController extends Controller
{
    //

   
    public function store(Data_CollectionRequest $request,DataCollectionRepository $dataCollectionRepository){
        $dataCollectionRepository->Data_Collection($request);
        return redirect()->back()->with('message','Project creation was successful');
    }

    public function update(){

    }

    public function destroy(){

    }
}

