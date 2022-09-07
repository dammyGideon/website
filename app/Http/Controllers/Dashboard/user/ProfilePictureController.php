<?php

namespace App\Http\Controllers\Dashboard\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ProfilePicture;
use App\Repository\User\ProfileRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfilePictureController extends Controller
{
    //

    public function index(){

    }
    public function store(Request $request,ProfileRepository $profileRepository){
        $profileRepository->Profile($request);
       // return redirect()->back()->with('message','upload successful');
    }
}
