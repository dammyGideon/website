<?php

namespace App\Http\Controllers\Dashboard\super_admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SuperAdmin\ChangePasswordRequest;
use App\Repository\SuperAdmin\ChangePassword;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //
    public function index(){

        return view('dashboard.super_admin.change_password');
    }

    public function change_password(){
        //$response=$changePassword->password($reques);

    }
}
