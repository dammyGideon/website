<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\User;
use App\Repository\User\ProfileRepository;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id=auth()->user()->id;

        $service_project=DB::table('service_details')
                        ->where('user_id',$id)
                        ->simplePaginate(5);
        $profile=User::where('id',$id)->get();
        return view('home',[
            'profile'=>$profile,
            'service_project'=>$service_project
        ]);

    }

    public function update_profile(Request $request,ProfileRepository $profileRepository){
        $profileRepository->updateUsersProfile($request);
        return redirect()->back()->with('success','profile was successfully updated');
    }

    public function usersProfileImage(Request $image, ProfileRepository $profileRepository){
        $profileRepository->ProfileImage($image);
        return redirect()->back()->with('success','profile image uploaded');
    }

    public function payment(){
        return view('dashboard.users.payment.payment');
    }

}
