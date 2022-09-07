<?php

namespace App\Http\Controllers\Dashboard\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    //

    public function index(){
        return view('dashboard.users.services.consultation');
    }
}
