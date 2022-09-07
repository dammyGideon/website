<?php

namespace App\Http\Controllers\Dashboard\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function profile(){
        return view('dashboard.super_admin.user_profile');
    }
}
